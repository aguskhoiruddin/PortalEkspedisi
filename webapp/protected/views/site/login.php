


<div id="mws-login-wrapper">
    <div id="mws-login">
        <h1>Login</h1>
        <div class="mws-login-lock"><i class="icon-lock"></i></div>
        <div id="mws-login-form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'login-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
                'htmlOptions' => array(
                    'class' => "mws-form"
                )
            ));
            ?>
            <?php echo $form->errorSummary($model,'','',array('style'=>'color:white;margin:10px 0 0 0;')); ?>

            <div class="mws-form-row">
                <div class="mws-form-item">
                    <?php echo $form->textField($model, 'username', array('class' => "mws-login-username required", 'placeholder' => "username")); ?>
                </div>
            </div>

            <div class="mws-form-row">
                <div class="mws-form-item">
                    <?php echo $form->passwordField($model, 'password', array('class' => "mws-login-username required", 'placeholder' => "password")); ?>
                </div>
            </div>

            <div id="mws-login-remember" class="mws-form-row mws-inset">
                <ul class="mws-form-list inline">
                    <li>
                        <?php echo $form->checkBox($model, 'rememberMe', array('id' => "remember")); ?>
                        <?php echo $form->label($model, 'rememberMe'); ?>
                    </li>
                </ul>
            </div>

            <div class="mws-form-row">
                <?php echo CHtml::submitButton('Login', array('class' => "btn btn-success mws-login-button")); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div><!-- form -->
        <!--            <form class="mws-form" action="dashboard.html" method="post">
                        <div class="mws-form-row">
                            <div class="mws-form-item">
                                <input type="text" name="username" class="mws-login-username required" placeholder="username">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <div class="mws-form-item">
                                <input type="password" name="password" class="mws-login-password required" placeholder="password">
                            </div>
                        </div>
                        <div id="mws-login-remember" class="mws-form-row mws-inset">
                            <ul class="mws-form-list inline">
                                <li>
                                    <input id="remember" type="checkbox"> 
                                    <label for="remember">Remember me</label>
                                </li>
                            </ul>
                        </div>
                        <div class="mws-form-row">
                            <input type="submit" value="Login" class="btn btn-success mws-login-button">
                        </div>
                    </form>-->
    </div>
</div>
