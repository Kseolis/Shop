<?php

/* default/template/common/maintenance.twig */
class __TwigTemplate_0ec110a69ffc5154da6986a11bd3ee14fbc06ce79784e301c89490903e3f3cd4 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"common-maintenance\" class=\"container\">
  <div class=\"row\">
    <div class=\"col-12\">";
        // line 4
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</div>
  </div>
</div>
";
        // line 7
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/common/maintenance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="common-maintenance" class="container">*/
/*   <div class="row">*/
/*     <div class="col-12">{{ message }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
