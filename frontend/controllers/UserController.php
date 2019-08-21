<?php

namespace frontend\controllers;

use common\repositories\OrderRepository;
use Exception;
use frontend\models\ChangePasswordForm;
use frontend\repositories\UserRepository;
use Throwable;
use Yii;
use frontend\models\User;
use common\models\UserSearch;
use yii\base\InvalidConfigException;
use yii\db\StaleObjectException;
use yii\di\NotInstantiableException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @var $repository UserRepository
     */
    private $repository;
    /**
     * @var $repository OrderRepository
     */
    private $orderRepository;
    /**
     * @var $repository ChangePasswordForm
     */
    private $changePasswordModel;

    /**
     * UserController constructor.
     * {@inheritdoc}
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function __construct($id, $module, $config = [])
    {
        $this->layout = 'main-layout';
        $this->repository = Yii::$container->get(UserRepository::class);
        $this->orderRepository = Yii::$container->get(OrderRepository::class);
        $this->changePasswordModel = Yii::$container->get(ChangePasswordForm::class);
        parent::__construct($id, $module, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Displays a single User model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->repository->findUserById($id);

        return $this->render('view', [
            'model' => $model,
            'userOrders' => $this->orderRepository->findOrdersByUserId($model->id),
            'changePasswordModel' => $this->changePasswordModel,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     *
     * @return mixed
     *
     * @throws NotFoundHttpException if the model cannot be found
     * @throws \yii\base\Exception
     */
    public function actionUpdate($id)
    {
        $model = $this->repository->findUserById($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Your information was successfully changed.');
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('view', [
            'model' => $model,
            'userOrders' => $this->orderRepository->findOrdersByUserId($model->id),
            'changePasswordModel' => $this->changePasswordModel,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     *
     * @return mixed
     *
     * @throws \yii\base\Exception
     */
    public function actionChangePassword($id)
    {
        $model = $this->repository->findUserById($id);

        if ($this->changePasswordModel->load(Yii::$app->request->post()) && $this->changePasswordModel->changePassword()) {
            Yii::$app->session->setFlash('success', 'Your password was successfully changed.');
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('view', [
            'model' => $model,
            'userOrders' => $this->orderRepository->findOrdersByUserId($model->id),
            'changePasswordModel' => $this->changePasswordModel,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
