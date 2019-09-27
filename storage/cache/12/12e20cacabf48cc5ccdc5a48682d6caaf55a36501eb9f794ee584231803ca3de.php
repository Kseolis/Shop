<?php

/* extension/fraud/ip.twig */
class __TwigTemplate_fc9f13b558f8823597308e01425337300f1f9ab5af4e0db8672f7785759d15ea extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
<div class=\"page-header\">
  <div class=\"container-fluid\">
    <div class=\"pull-right\">
      <button class=\"btn btn-primary\" data-toggle=\"tooltip\" form=\"form-fraud\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" type=\"submit\"><i class=\"fa fa-save\"></i></button>
      <a class=\"btn btn-default\" data-toggle=\"tooltip\" href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\"><i class=\"fa fa-reply\"></i></a></div>
    <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>
  </div>
  ";
        }
        // line 21
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
      <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" class=\"form-horizontal\" enctype=\"multipart/form-data\" id=\"form-fraud\">
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 28
        echo (isset($context["help_order_status"]) ? $context["help_order_status"] : null);
        echo "\">";
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <select name=\"fraud_ip_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              
              
                  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 34
            echo "                  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["fraud_ip_order_status_id"]) ? $context["fraud_ip_order_status_id"] : null))) {
                // line 35
                echo "                  
              
              <option selected=\"selected\" value=\"";
                // line 37
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
              
              
                  ";
            } else {
                // line 41
                echo "                  
              
              <option value=\"";
                // line 43
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
              
              
                  ";
            }
            // line 47
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                
            
            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-status\"> ";
        // line 54
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo " </label>
          <div class=\"col-sm-10\">
            <select name=\"fraud_ip_status\" id=\"input-status\" class=\"form-control\">
              
              
                  ";
        // line 59
        if ((isset($context["fraud_ip_status"]) ? $context["fraud_ip_status"] : null)) {
            // line 60
            echo "                  
              
              <option selected=\"selected\" value=\"1\"> ";
            // line 62
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
              <option value=\"0\"> ";
            // line 63
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
              
              
                  ";
        } else {
            // line 67
            echo "                  
              
              <option value=\"1\"> ";
            // line 69
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
              <option selected=\"selected\" value=\"0\"> ";
            // line 70
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
              
              
                  ";
        }
        // line 74
        echo "                
            
            </select>
          </div>
        </div>
        <fieldset>
          <legend> ";
        // line 80
        echo (isset($context["text_ip_add"]) ? $context["text_ip_add"] : null);
        echo " </legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-ip\"> ";
        // line 82
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo " </label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <input class=\"form-control\" id=\"input-ip\" placeholder=\"";
        // line 85
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "\" type=\"text\" value=\"\"/>
                <span class=\"input-group-btn\">
                <button class=\"btn btn-primary\" data-loading-text=\"";
        // line 87
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" id=\"button-ip-add\" type=\"button\"> ";
        echo (isset($context["button_ip_add"]) ? $context["button_ip_add"] : null);
        echo " </button>
                </span> </div>
            </div>
          </div>
        </fieldset>
        <br/>
        <fieldset>
          <legend> ";
        // line 94
        echo (isset($context["text_ip_list"]) ? $context["text_ip_list"] : null);
        echo " </legend>
          <div id=\"ip\"></div>
        </fieldset>
      </form>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#ip').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();
\t
\t\$('#ip').load(this.href);
});

\$('#ip').load('index.php?route=extension/fraud/ip/ip&user_token=";
        // line 107
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');

\$('#button-ip-add').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/fraud/ip/addip&user_token=";
        // line 111
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'ip=' + encodeURIComponent(\$('#input-ip').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-ip-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-ip-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t
\t\t\t\t\$('#ip').load('index.php?route=extension/fraud/ip/ip&user_token=";
        // line 131
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t\t
\t\t\t\t\$('#input-ip').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#ip').delegate('button', 'click', function() {
\tvar element = this;
\t
\t\$.ajax({
\t\turl: 'index.php?route=extension/fraud/ip/removeip&user_token=";
        // line 146
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'ip=' + encodeURIComponent(\$(element).val()),
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t
\t\t\t\t\$('#ip').load('index.php?route=extension/fraud/ip/ip&user_token=";
        // line 166
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script> 
</div>
";
        // line 176
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/fraud/ip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 176,  308 => 166,  285 => 146,  267 => 131,  244 => 111,  237 => 107,  221 => 94,  209 => 87,  204 => 85,  198 => 82,  193 => 80,  185 => 74,  178 => 70,  174 => 69,  170 => 67,  163 => 63,  159 => 62,  155 => 60,  153 => 59,  145 => 54,  137 => 48,  131 => 47,  122 => 43,  118 => 41,  109 => 37,  105 => 35,  102 => 34,  98 => 33,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* <div class="page-header">*/
/*   <div class="container-fluid">*/
/*     <div class="pull-right">*/
/*       <button class="btn btn-primary" data-toggle="tooltip" form="form-fraud" title="{{ button_save }}" type="submit"><i class="fa fa-save"></i></button>*/
/*       <a class="btn btn-default" data-toggle="tooltip" href="{{ cancel }}" title="{{ button_cancel }}"><i class="fa fa-reply"></i></a></div>*/
/*     <h1>{{ heading_title }}</h1>*/
/*     <ul class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* <div class="container-fluid"> {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button class="close" data-dismiss="alert" type="button">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <form action="{{ action }}" method="post" class="form-horizontal" enctype="multipart/form-data" id="form-fraud">*/
/*         <div class="form-group">*/
/*           <label class="col-sm-2 control-label" for="input-order-status"><span data-toggle="tooltip" title="{{ help_order_status }}">{{ entry_order_status }}</span></label>*/
/*           <div class="col-sm-10">*/
/*             <select name="fraud_ip_order_status_id" id="input-order-status" class="form-control">*/
/*               */
/*               */
/*                   {% for order_status in order_statuses %}*/
/*                   {% if order_status.order_status_id == fraud_ip_order_status_id %}*/
/*                   */
/*               */
/*               <option selected="selected" value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*               */
/*               */
/*                   {% else %}*/
/*                   */
/*               */
/*               <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*               */
/*               */
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 */
/*             */
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="col-sm-2 control-label" for="input-status"> {{ entry_status }} </label>*/
/*           <div class="col-sm-10">*/
/*             <select name="fraud_ip_status" id="input-status" class="form-control">*/
/*               */
/*               */
/*                   {% if fraud_ip_status %}*/
/*                   */
/*               */
/*               <option selected="selected" value="1"> {{ text_enabled }} </option>*/
/*               <option value="0"> {{ text_disabled }} </option>*/
/*               */
/*               */
/*                   {% else %}*/
/*                   */
/*               */
/*               <option value="1"> {{ text_enabled }} </option>*/
/*               <option selected="selected" value="0"> {{ text_disabled }} </option>*/
/*               */
/*               */
/*                   {% endif %}*/
/*                 */
/*             */
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <fieldset>*/
/*           <legend> {{ text_ip_add }} </legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-ip"> {{ entry_ip }} </label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group">*/
/*                 <input class="form-control" id="input-ip" placeholder="{{ entry_ip }}" type="text" value=""/>*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-primary" data-loading-text="{{ text_loading }}" id="button-ip-add" type="button"> {{ button_ip_add }} </button>*/
/*                 </span> </div>*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <br/>*/
/*         <fieldset>*/
/*           <legend> {{ text_ip_list }} </legend>*/
/*           <div id="ip"></div>*/
/*         </fieldset>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#ip').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* 	*/
/* 	$('#ip').load(this.href);*/
/* });*/
/* */
/* $('#ip').load('index.php?route=extension/fraud/ip/ip&user_token={{ user_token }}');*/
/* */
/* $('#button-ip-add').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/fraud/ip/addip&user_token={{ user_token }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'ip=' + encodeURIComponent($('#input-ip').val()),*/
/* 		beforeSend: function() {*/
/* 			$('#button-ip-add').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-ip-add').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* 			*/
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* 			*/
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				*/
/* 				$('#ip').load('index.php?route=extension/fraud/ip/ip&user_token={{ user_token }}');*/
/* 				*/
/* 				$('#input-ip').val('');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#ip').delegate('button', 'click', function() {*/
/* 	var element = this;*/
/* 	*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/fraud/ip/removeip&user_token={{ user_token }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'ip=' + encodeURIComponent($(element).val()),*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(element).button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* 			*/
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* 			*/
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				*/
/* 				$('#ip').load('index.php?route=extension/fraud/ip/ip&user_token={{ user_token }}');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* </div>*/
/* {{ footer }} */
