<?php

/* default/template/extension/module/pp_button.twig */
class __TwigTemplate_9b878dd976ebca5c782bbc660314f2ae3af0c14580d16d80a1a593267da2d6d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-body\" style=\"text-align: right;\">
    <div class=\"buttons\">
      <div class=\"pull-right\">
        <a id=\"button-confirm\" href=\"";
        // line 5
        echo (isset($context["payment_url"]) ? $context["payment_url"] : null);
        echo "\"></a>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
window.paypalCheckoutReady = function () {
  paypal.checkout.setup('";
        // line 12
        echo (isset($context["paypal_username"]) ? $context["paypal_username"] : null);
        echo "', {
    container: 'button-confirm',
    environment: '";
        // line 14
        echo (isset($context["paypal_environment"]) ? $context["paypal_environment"] : null);
        echo "'
  });
};
//--></script>
<script src=\"//www.paypalobjects.com/api/checkout.js\" async></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/pp_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  35 => 12,  25 => 5,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-body" style="text-align: right;">*/
/*     <div class="buttons">*/
/*       <div class="pull-right">*/
/*         <a id="button-confirm" href="{{ payment_url }}"></a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* window.paypalCheckoutReady = function () {*/
/*   paypal.checkout.setup('{{ paypal_username }}', {*/
/*     container: 'button-confirm',*/
/*     environment: '{{ paypal_environment }}'*/
/*   });*/
/* };*/
/* //--></script>*/
/* <script src="//www.paypalobjects.com/api/checkout.js" async></script>*/
/* */
