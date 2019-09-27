<?php

/* extension/fraud/ip_ip.twig */
class __TwigTemplate_a2afc97d4881d00c190de62395086db60510d5384873179a596ee7c7d613404a extends Twig_Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 5
        echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
        echo "</td>
        <td class=\"text-right\">";
        // line 6
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
        <td class=\"text-right\">";
        // line 8
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if ((isset($context["ips"]) ? $context["ips"] : null)) {
            // line 13
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ips"]) ? $context["ips"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ip"]) {
                // line 14
                echo "      <tr>
        <td class=\"text-left\"><a href=\"http://www.geoiptool.com/en/?IP=";
                // line 15
                echo $this->getAttribute($context["ip"], "ip", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["ip"], "ip", array());
                echo "</a></td>
        <td class=\"text-right\"><a href=\"";
                // line 16
                echo $this->getAttribute($context["ip"], "filter_ip", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["ip"], "total", array());
                echo "</a></td>
        <td class=\"text-left\">";
                // line 17
                echo $this->getAttribute($context["ip"], "date_added", array());
                echo "</td>
        <td class=\"text-right\"><button type=\"button\" value=\"";
                // line 18
                echo $this->getAttribute($context["ip"], "ip", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      ";
        } else {
            // line 22
            echo "      <tr>
        <td class=\"text-center\" colspan=\"4\">";
            // line 23
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 26
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 30
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 31
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/fraud/ip_ip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  101 => 30,  95 => 26,  89 => 23,  86 => 22,  83 => 21,  70 => 18,  66 => 17,  60 => 16,  54 => 15,  51 => 14,  46 => 13,  44 => 12,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="table-responsive">*/
/*   <table class="table table-bordered table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-left">{{ column_ip }}</td>*/
/*         <td class="text-right">{{ column_total }}</td>*/
/*         <td class="text-left">{{ column_date_added }}</td>*/
/*         <td class="text-right">{{ column_action }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if ips %}*/
/*       {% for ip in ips %}*/
/*       <tr>*/
/*         <td class="text-left"><a href="http://www.geoiptool.com/en/?IP={{ ip.ip }}" target="_blank">{{ ip.ip }}</a></td>*/
/*         <td class="text-right"><a href="{{ ip.filter_ip }}" target="_blank">{{ ip.total }}</a></td>*/
/*         <td class="text-left">{{ ip.date_added }}</td>*/
/*         <td class="text-right"><button type="button" value="{{ ip.ip }}" data-toggle="tooltip" title="{{ button_remove }}" data-loading-text="{{ text_loading }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*       {% else %}*/
/*       <tr>*/
/*         <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*       </tr>*/
/*       {% endif %}*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*   <div class="col-sm-6 text-right">{{ results }}</div>*/
/* </div>*/
/* */
