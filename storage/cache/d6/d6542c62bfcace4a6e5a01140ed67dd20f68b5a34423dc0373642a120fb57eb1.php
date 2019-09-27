<?php

/* extension/payment/worldpay.twig */
class __TwigTemplate_c22a4589db01fac02dd97ae67882d2fe79a9c06fca2b4ff4231bac31eefe3e83 extends Twig_Template
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
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 12
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1><i class=\"fa fa-credit-card\"></i> ";
        // line 13
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel-body\">
      <form action=\"";
        // line 18
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 20
        echo (isset($context["tab_settings"]) ? $context["tab_settings"] : null);
        echo "</a></li>
          <li><a href=\"#tab-order-status\" data-toggle=\"tab\">";
        // line 21
        echo (isset($context["tab_order_status"]) ? $context["tab_order_status"] : null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-service-key\">";
        // line 26
        echo (isset($context["entry_service_key"]) ? $context["entry_service_key"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_worldpay_service_key\" value=\"";
        // line 28
        echo (isset($context["payment_worldpay_service_key"]) ? $context["payment_worldpay_service_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_service_key"]) ? $context["entry_service_key"] : null);
        echo "\" id=\"input-service-key\" class=\"form-control\" />
                ";
        // line 29
        if ((isset($context["error_service_key"]) ? $context["error_service_key"] : null)) {
            // line 30
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_service_key"]) ? $context["error_service_key"] : null);
            echo "</div>
                ";
        }
        // line 31
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-client-key\">";
        // line 34
        echo (isset($context["entry_client_key"]) ? $context["entry_client_key"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_worldpay_client_key\" value=\"";
        // line 36
        echo (isset($context["payment_worldpay_client_key"]) ? $context["payment_worldpay_client_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_client_key"]) ? $context["entry_client_key"] : null);
        echo "\" id=\"input-client-key\" class=\"form-control\" />
                ";
        // line 37
        if ((isset($context["error_client_key"]) ? $context["error_client_key"] : null)) {
            // line 38
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_client_key"]) ? $context["error_client_key"] : null);
            echo "</div>
                ";
        }
        // line 39
        echo " </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-total\">";
        // line 42
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo " </label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_worldpay_total\" value=\"";
        // line 44
        echo (isset($context["payment_worldpay_total"]) ? $context["payment_worldpay_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                <span class=\"help-block\">";
        // line 45
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "</span> </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-card\">";
        // line 48
        echo (isset($context["entry_card"]) ? $context["entry_card"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_card\" id=\"input-card\" class=\"form-control\">
                  ";
        // line 51
        if ((isset($context["payment_worldpay_card"]) ? $context["payment_worldpay_card"] : null)) {
            // line 52
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 53
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 55
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 56
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 58
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-secret-token\"><span data-toggle=\"tooltip\" title=\"";
        // line 62
        echo (isset($context["help_secret_token"]) ? $context["help_secret_token"] : null);
        echo "\">";
        echo (isset($context["entry_secret_token"]) ? $context["entry_secret_token"] : null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_worldpay_secret_token\" value=\"";
        // line 64
        echo (isset($context["payment_worldpay_secret_token"]) ? $context["payment_worldpay_secret_token"] : null);
        echo "\" id=\"input-secret-token\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-webhook-url\"><span data-toggle=\"tooltip\" title=\"";
        // line 68
        echo (isset($context["help_webhook_url"]) ? $context["help_webhook_url"] : null);
        echo "\">";
        echo (isset($context["entry_webhook_url"]) ? $context["entry_webhook_url"] : null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-link\"></i></span>
                  <input type=\"text\" readonly value=\"";
        // line 71
        echo (isset($context["payment_worldpay_webhook_url"]) ? $context["payment_worldpay_webhook_url"] : null);
        echo "\" id=\"input-webhook-url\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-cron-job-url\"><span data-toggle=\"tooltip\" title=\"";
        // line 76
        echo (isset($context["help_cron_job_url"]) ? $context["help_cron_job_url"] : null);
        echo "\">";
        echo (isset($context["entry_cron_job_url"]) ? $context["entry_cron_job_url"] : null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-link\"></i></span>
                  <input type=\"text\" readonly value=\"";
        // line 79
        echo (isset($context["payment_worldpay_cron_job_url"]) ? $context["payment_worldpay_cron_job_url"] : null);
        echo "\" id=\"input-cron-job-url\" class=\"form-control\" />
                </div>
              </div>
            </div>
            ";
        // line 83
        if ((isset($context["payment_worldpay_last_cron_job_run"]) ? $context["payment_worldpay_last_cron_job_run"] : null)) {
            // line 84
            echo "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-cron-job-last-run\">";
            // line 85
            echo (isset($context["entry_last_cron_job_run"]) ? $context["entry_last_cron_job_run"] : null);
            echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" readonly value=\"";
            // line 87
            echo (isset($context["payment_worldpay_last_cron_job_run"]) ? $context["payment_worldpay_last_cron_job_run"] : null);
            echo "\" id=\"input-cron-job-last-run\" class=\"form-control\" />
              </div>
            </div>
            ";
        }
        // line 91
        echo "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 92
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 96
            echo "                  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_worldpay_order_status_id"]) ? $context["payment_worldpay_order_status_id"] : null))) {
                // line 97
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  ";
            } else {
                // line 99
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  ";
            }
            // line 101
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 107
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                  <option value=\"0\">";
        // line 110
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                  ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 112
            echo "                    ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_worldpay_geo_zone_id"]) ? $context["payment_worldpay_geo_zone_id"] : null))) {
                // line 113
                echo "                      <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 115
                echo "                      <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                    ";
            }
            // line 117
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-debug\">";
        // line 122
        echo (isset($context["entry_debug"]) ? $context["entry_debug"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_debug\" id=\"input-debug\" class=\"form-control\">
                  ";
        // line 125
        if ((isset($context["payment_worldpay_debug"]) ? $context["payment_worldpay_debug"] : null)) {
            // line 126
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 127
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 129
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 130
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 132
        echo "                </select>
                <span class=\"help-block\">";
        // line 133
        echo (isset($context["help_debug"]) ? $context["help_debug"] : null);
        echo "</span> </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 136
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_status\" id=\"input-status\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 140
        if ((isset($context["payment_worldpay_status"]) ? $context["payment_worldpay_status"] : null)) {
            // line 141
            echo "\t\t\t\t\t  
                  <option value=\"1\" selected=\"selected\">";
            // line 142
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\">";
            // line 143
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  
\t\t\t\t  ";
        } else {
            // line 146
            echo "\t\t\t\t\t  
                  <option value=\"1\">";
            // line 147
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 148
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  
\t\t\t\t  ";
        }
        // line 151
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 156
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_worldpay_sort_order\" value=\"";
        // line 158
        echo (isset($context["payment_worldpay_sort_order"]) ? $context["payment_worldpay_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-order-status\">
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 164
        echo (isset($context["entry_success_status"]) ? $context["entry_success_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_success_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 169
            echo "\t\t\t\t\t  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_worldpay_success_status_id"]) ? $context["payment_worldpay_success_status_id"] : null))) {
                // line 170
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 171
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 174
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 175
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 178
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 184
        echo (isset($context["entry_failed_status"]) ? $context["entry_failed_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_failed_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 189
            echo "\t\t\t\t\t  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_worldpay_failed_status_id"]) ? $context["payment_worldpay_failed_status_id"] : null))) {
                // line 190
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 191
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 194
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 195
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 198
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 204
        echo (isset($context["entry_settled_status"]) ? $context["entry_settled_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_settled_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 209
            echo "\t\t\t\t\t  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_worldpay_settled_status_id"]) ? $context["payment_worldpay_settled_status_id"] : null))) {
                // line 210
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 211
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 214
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 215
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 218
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 224
        echo (isset($context["entry_refunded_status"]) ? $context["entry_refunded_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_refunded_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 229
            echo "\t\t\t\t\t  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_worldpay_refunded_status_id"]) ? $context["payment_worldpay_refunded_status_id"] : null))) {
                // line 230
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 231
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 234
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 235
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 238
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 244
        echo (isset($context["entry_partially_refunded_status"]) ? $context["entry_partially_refunded_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_partially_refunded_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 249
            echo "\t\t\t\t\t  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_worldpay_partially_refunded_status_id"]) ? $context["payment_worldpay_partially_refunded_status_id"] : null))) {
                // line 250
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 251
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 254
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 255
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 258
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 264
        echo (isset($context["entry_charged_back_status"]) ? $context["entry_charged_back_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_charged_back_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 269
            echo "\t\t\t\t\t  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_worldpay_charged_back_status_id"]) ? $context["payment_worldpay_charged_back_status_id"] : null))) {
                // line 270
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 271
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 274
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 275
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 278
            echo "\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 284
        echo (isset($context["entry_information_requested_status"]) ? $context["entry_information_requested_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_information_requested_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 289
            echo "\t\t\t\t\t  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_worldpay_information_requested_status_id"]) ? $context["payment_worldpay_information_requested_status_id"] : null))) {
                // line 290
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 291
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 294
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 295
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 298
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 299
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 304
        echo (isset($context["entry_information_supplied_status"]) ? $context["entry_information_supplied_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_information_supplied_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 309
            echo "\t\t\t\t\t  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_worldpay_information_supplied_status_id"]) ? $context["payment_worldpay_information_supplied_status_id"] : null))) {
                // line 310
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 311
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 314
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 315
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t ";
            }
            // line 318
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 324
        echo (isset($context["entry_chargeback_reversed_status"]) ? $context["entry_chargeback_reversed_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_chargeback_reversed_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 329
            echo "\t\t\t\t\t  ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_worldpay_chargeback_reversed_status_id"]) ? $context["payment_worldpay_chargeback_reversed_status_id"] : null))) {
                // line 330
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 331
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 334
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 335
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 338
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        echo "\t\t\t\t
                </select>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
";
        // line 349
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/worldpay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  874 => 349,  862 => 339,  856 => 338,  848 => 335,  845 => 334,  837 => 331,  834 => 330,  831 => 329,  827 => 328,  820 => 324,  813 => 319,  807 => 318,  799 => 315,  796 => 314,  788 => 311,  785 => 310,  782 => 309,  778 => 308,  771 => 304,  764 => 299,  758 => 298,  750 => 295,  747 => 294,  739 => 291,  736 => 290,  733 => 289,  729 => 288,  722 => 284,  715 => 279,  709 => 278,  701 => 275,  698 => 274,  690 => 271,  687 => 270,  684 => 269,  680 => 268,  673 => 264,  666 => 259,  660 => 258,  652 => 255,  649 => 254,  641 => 251,  638 => 250,  635 => 249,  631 => 248,  624 => 244,  617 => 239,  611 => 238,  603 => 235,  600 => 234,  592 => 231,  589 => 230,  586 => 229,  582 => 228,  575 => 224,  568 => 219,  562 => 218,  554 => 215,  551 => 214,  543 => 211,  540 => 210,  537 => 209,  533 => 208,  526 => 204,  519 => 199,  513 => 198,  505 => 195,  502 => 194,  494 => 191,  491 => 190,  488 => 189,  484 => 188,  477 => 184,  470 => 179,  464 => 178,  456 => 175,  453 => 174,  445 => 171,  442 => 170,  439 => 169,  435 => 168,  428 => 164,  417 => 158,  412 => 156,  405 => 151,  399 => 148,  395 => 147,  392 => 146,  386 => 143,  382 => 142,  379 => 141,  377 => 140,  370 => 136,  364 => 133,  361 => 132,  356 => 130,  351 => 129,  346 => 127,  341 => 126,  339 => 125,  333 => 122,  327 => 118,  321 => 117,  313 => 115,  305 => 113,  302 => 112,  298 => 111,  294 => 110,  288 => 107,  281 => 102,  275 => 101,  267 => 99,  259 => 97,  256 => 96,  252 => 95,  246 => 92,  243 => 91,  236 => 87,  231 => 85,  228 => 84,  226 => 83,  219 => 79,  211 => 76,  203 => 71,  195 => 68,  188 => 64,  181 => 62,  175 => 58,  170 => 56,  165 => 55,  160 => 53,  155 => 52,  153 => 51,  147 => 48,  141 => 45,  135 => 44,  130 => 42,  125 => 39,  119 => 38,  117 => 37,  111 => 36,  106 => 34,  101 => 31,  95 => 30,  93 => 29,  87 => 28,  82 => 26,  74 => 21,  70 => 20,  65 => 18,  57 => 13,  51 => 12,  47 => 11,  41 => 7,  30 => 5,  26 => 4,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1><i class="fa fa-credit-card"></i> {{ heading_title }}</h1>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel-body">*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">*/
/*         <ul class="nav nav-tabs">*/
/*           <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_settings }}</a></li>*/
/*           <li><a href="#tab-order-status" data-toggle="tab">{{ tab_order_status }}</a></li>*/
/*         </ul>*/
/*         <div class="tab-content">*/
/*           <div class="tab-pane active" id="tab-general">*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-service-key">{{ entry_service_key }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_worldpay_service_key" value="{{ payment_worldpay_service_key }}" placeholder="{{ entry_service_key }}" id="input-service-key" class="form-control" />*/
/*                 {% if error_service_key %}*/
/*                 <div class="text-danger">{{ error_service_key }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-client-key">{{ entry_client_key }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_worldpay_client_key" value="{{ payment_worldpay_client_key }}" placeholder="{{ entry_client_key }}" id="input-client-key" class="form-control" />*/
/*                 {% if error_client_key %}*/
/*                 <div class="text-danger">{{ error_client_key }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-total">{{ entry_total }} </label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_worldpay_total" value="{{ payment_worldpay_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*                 <span class="help-block">{{ help_total }}</span> </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-card">{{ entry_card }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_card" id="input-card" class="form-control">*/
/*                   {% if payment_worldpay_card %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-secret-token"><span data-toggle="tooltip" title="{{ help_secret_token }}">{{ entry_secret_token }}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_worldpay_secret_token" value="{{ payment_worldpay_secret_token }}" id="input-secret-token" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-webhook-url"><span data-toggle="tooltip" title="{{ help_webhook_url }}">{{ entry_webhook_url }}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="input-group"><span class="input-group-addon"><i class="fa fa-link"></i></span>*/
/*                   <input type="text" readonly value="{{ payment_worldpay_webhook_url }}" id="input-webhook-url" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-cron-job-url"><span data-toggle="tooltip" title="{{ help_cron_job_url }}">{{ entry_cron_job_url }}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <div class="input-group"><span class="input-group-addon"><i class="fa fa-link"></i></span>*/
/*                   <input type="text" readonly value="{{ payment_worldpay_cron_job_url }}" id="input-cron-job-url" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% if payment_worldpay_last_cron_job_run %}*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-cron-job-last-run">{{ entry_last_cron_job_run }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" readonly value="{{ payment_worldpay_last_cron_job_run }}" id="input-cron-job-last-run" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_order_status_id" id="input-order-status" class="form-control">*/
/*                 {% for order_status in order_statuses %}*/
/*                   {% if order_status.order_status_id == payment_worldpay_order_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                   {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/* 				*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                   <option value="0">{{ text_all_zones }}</option>*/
/*                   {% for geo_zone in geo_zones %}*/
/*                     {% if geo_zone.geo_zone_id == payment_worldpay_geo_zone_id %}*/
/*                       <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                     {% else %}*/
/*                       <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-debug">{{ entry_debug }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_debug" id="input-debug" class="form-control">*/
/*                   {% if payment_worldpay_debug %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*                 <span class="help-block">{{ help_debug }}</span> </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_status" id="input-status" class="form-control">*/
/*                   */
/* 				  {% if payment_worldpay_status %}*/
/* 					  */
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   */
/* 				  {% else %}*/
/* 					  */
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   */
/* 				  {% endif %}*/
/* 				*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_worldpay_sort_order" value="{{ payment_worldpay_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="tab-pane" id="tab-order-status">*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_success_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_success_status_id" class="form-control">*/
/*                   */
/* 				  {% for order_status in order_statuses %}*/
/* 					  {% if order_status.order_status_id == payment_worldpay_success_status_id %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% else %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% endif %}*/
/* 				  {% endfor %}*/
/* 				*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_failed_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_failed_status_id" class="form-control">*/
/*                   */
/* 				  {% for order_status in order_statuses %}*/
/* 					  {% if order_status.order_status_id == payment_worldpay_failed_status_id %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% else %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% endif %}*/
/* 				  {% endfor %}*/
/* 				*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_settled_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_settled_status_id" class="form-control">*/
/*                   */
/* 				  {% for order_status in order_statuses %}*/
/* 					  {% if order_status.order_status_id == payment_worldpay_settled_status_id %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% else %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% endif %}*/
/* 				  {% endfor %}*/
/* 				*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_refunded_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_refunded_status_id" class="form-control">*/
/*                   */
/* 				  {% for order_status in order_statuses %}*/
/* 					  {% if order_status.order_status_id == payment_worldpay_refunded_status_id %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% else %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% endif %}*/
/* 				  {% endfor %}*/
/* 				*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_partially_refunded_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_partially_refunded_status_id" class="form-control">*/
/*                   */
/* 				  {% for order_status in order_statuses %}*/
/* 					  {% if order_status.order_status_id == payment_worldpay_partially_refunded_status_id %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% else %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% endif %}*/
/* 				  {% endfor %}*/
/* 				*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_charged_back_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_charged_back_status_id" class="form-control">*/
/*                   */
/* 				  {% for order_status in order_statuses %}*/
/* 					  {% if order_status.order_status_id == payment_worldpay_charged_back_status_id %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% else %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% endif %}*/
/* 				 {% endfor %}*/
/* 				*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_information_requested_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_information_requested_status_id" class="form-control">*/
/*                   */
/* 				  {% for order_status in order_statuses %}*/
/* 					  {% if order_status.order_status_id == payment_worldpay_information_requested_status_id %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% else %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% endif %}*/
/* 				  {% endfor %}*/
/* 				*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_information_supplied_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_information_supplied_status_id" class="form-control">*/
/*                   */
/* 				  {% for order_status in order_statuses %}*/
/* 					  {% if order_status.order_status_id == payment_worldpay_information_supplied_status_id %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% else %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                   */
/* 					 {% endif %}*/
/* 				  {% endfor %}*/
/* 				*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_chargeback_reversed_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_worldpay_chargeback_reversed_status_id" class="form-control">*/
/*                   */
/* 				  {% for order_status in order_statuses %}*/
/* 					  {% if order_status.order_status_id == payment_worldpay_chargeback_reversed_status_id %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% else %}*/
/* 						  */
/*                   <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                   */
/* 					  {% endif %}*/
/* 				  {% endfor %}*/
/* 				*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
