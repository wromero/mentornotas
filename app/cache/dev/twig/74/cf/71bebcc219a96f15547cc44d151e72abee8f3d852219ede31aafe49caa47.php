<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_74cf71bebcc219a96f15547cc44d151e72abee8f3d852219ede31aafe49caa47 extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 52
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('change');

        field_dialog_";
        // line 63
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".modal('hide');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "  =  function() {

        Admin.log('[";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 92
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();
                }
            });
        });
    }

    // handle the list link
    var field_dialog_form_list_";
        // line 100
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        initialize_popup_";
        // line 102
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 111
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 122
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);

                field_dialog_title_";
        // line 124
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain"));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 126
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                field_dialog_form_list_handle_action_";
        // line 128
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 131
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 133
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 139
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 140
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 147
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        Admin.log('[";
        // line 149
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 157
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 160
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                field_dialog_title_";
        // line 161
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain"));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 163
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 167
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
                jQuery('form', field_dialog_";
        // line 168
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 171
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 173
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 179
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 191
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 193
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 207
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 217
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 225
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 230
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".modal('hide');

                    ";
        // line 232
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
            // line 233
            echo "                        ";
            // line 237
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val(data.objectId);
                        jQuery('#";
            // line 238
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').change();

                    ";
        } else {
            // line 241
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 243
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 244
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "subclass" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code")));
            // line 250
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 255
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 256
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 263
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 268
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 273
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 275
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 278
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 285
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "         = false;
    var field_dialog_content_";
        // line 286
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;
    var field_dialog_title_";
        // line 287
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "   = false;

    function initialize_popup_";
        // line 289
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 291
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ") {
            field_dialog_";
        // line 292
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "         = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");
            field_dialog_content_";
        // line 293
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");
            field_dialog_title_";
        // line 294
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 297
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

            Admin.log('[";
        // line 299
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 306
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 308
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 313
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 317
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 324
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 325
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
    }

    ";
        // line 328
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
            // line 329
            echo "        ";
            // line 332
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 334
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 338
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 342
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 349
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 354
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 361
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 364
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " option').get(0)) {
                jQuery('#";
            // line 365
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 368
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val('');
            jQuery('#";
            // line 369
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('change');

            return false;
        }
        ";
            // line 376
            echo "
        // update the label
        jQuery('#";
            // line 378
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 380
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "] update the label');

            jQuery('#field_widget_";
            // line 382
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 385
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "uniqid"), "code" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "code"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "link_parameters")));
            // line 390
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 393
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 399
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 399,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  579 => 332,  575 => 328,  569 => 325,  536 => 306,  510 => 293,  504 => 292,  482 => 285,  434 => 256,  421 => 244,  310 => 171,  244 => 140,  231 => 133,  226 => 131,  275 => 103,  237 => 86,  563 => 188,  560 => 187,  558 => 186,  549 => 182,  543 => 179,  532 => 174,  528 => 173,  525 => 172,  523 => 171,  514 => 168,  511 => 167,  508 => 165,  487 => 156,  436 => 132,  331 => 96,  325 => 94,  320 => 122,  272 => 81,  267 => 78,  249 => 74,  216 => 70,  152 => 92,  20 => 11,  338 => 130,  323 => 125,  315 => 173,  301 => 117,  277 => 109,  262 => 105,  257 => 103,  239 => 97,  97 => 63,  127 => 76,  167 => 57,  70 => 24,  211 => 81,  137 => 46,  77 => 27,  1414 => 421,  1402 => 417,  1398 => 415,  1394 => 414,  1385 => 413,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1249 => 367,  1246 => 366,  1237 => 360,  1223 => 356,  1221 => 355,  1218 => 354,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1088 => 308,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1027 => 281,  1024 => 280,  1016 => 276,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  931 => 240,  923 => 236,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  876 => 218,  873 => 217,  862 => 212,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  729 => 155,  724 => 154,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  695 => 139,  694 => 138,  689 => 137,  683 => 393,  680 => 134,  675 => 132,  666 => 382,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  640 => 119,  638 => 118,  635 => 365,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 317,  550 => 94,  547 => 93,  527 => 91,  524 => 297,  515 => 85,  509 => 83,  503 => 81,  496 => 79,  493 => 78,  490 => 287,  478 => 74,  459 => 273,  456 => 68,  433 => 130,  428 => 59,  400 => 233,  390 => 43,  344 => 193,  316 => 16,  311 => 118,  308 => 86,  293 => 109,  290 => 5,  288 => 107,  263 => 365,  260 => 98,  255 => 353,  250 => 93,  222 => 81,  207 => 269,  202 => 68,  197 => 119,  194 => 248,  191 => 69,  184 => 233,  181 => 61,  161 => 54,  129 => 57,  104 => 67,  2767 => 862,  2758 => 861,  2756 => 860,  2753 => 859,  2735 => 855,  2728 => 854,  2725 => 853,  2722 => 852,  2719 => 851,  2716 => 850,  2714 => 849,  2711 => 848,  2687 => 844,  2662 => 843,  2660 => 842,  2657 => 841,  2645 => 836,  2642 => 835,  2639 => 834,  2636 => 833,  2633 => 832,  2630 => 831,  2627 => 830,  2624 => 829,  2621 => 828,  2618 => 827,  2615 => 826,  2612 => 825,  2609 => 824,  2606 => 823,  2603 => 822,  2600 => 821,  2597 => 820,  2592 => 819,  2590 => 818,  2587 => 817,  2578 => 811,  2572 => 809,  2569 => 808,  2564 => 807,  2562 => 806,  2559 => 805,  2553 => 801,  2549 => 799,  2547 => 798,  2544 => 797,  2535 => 795,  2531 => 794,  2524 => 793,  2520 => 791,  2517 => 790,  2515 => 789,  2512 => 788,  2509 => 787,  2506 => 786,  2504 => 785,  2501 => 784,  2498 => 783,  2495 => 782,  2493 => 781,  2490 => 780,  2482 => 776,  2479 => 775,  2476 => 774,  2473 => 773,  2465 => 769,  2463 => 768,  2460 => 767,  2451 => 762,  2448 => 761,  2442 => 759,  2439 => 758,  2433 => 756,  2430 => 755,  2424 => 753,  2421 => 752,  2415 => 750,  2413 => 749,  2410 => 748,  2404 => 746,  2401 => 745,  2399 => 744,  2396 => 743,  2387 => 738,  2385 => 737,  2361 => 736,  2358 => 735,  2355 => 734,  2352 => 733,  2350 => 732,  2347 => 731,  2341 => 729,  2339 => 728,  2336 => 727,  2330 => 725,  2328 => 724,  2325 => 723,  2319 => 721,  2317 => 720,  2314 => 719,  2308 => 717,  2306 => 716,  2303 => 715,  2297 => 713,  2294 => 712,  2292 => 711,  2289 => 710,  2286 => 709,  2283 => 708,  2280 => 707,  2277 => 706,  2274 => 705,  2271 => 704,  2269 => 703,  2266 => 702,  2259 => 698,  2255 => 697,  2250 => 696,  2248 => 695,  2245 => 694,  2238 => 689,  2235 => 688,  2228 => 685,  2225 => 684,  2217 => 678,  2215 => 677,  2210 => 675,  2207 => 674,  2196 => 672,  2193 => 671,  2191 => 670,  2188 => 669,  2185 => 668,  2183 => 667,  2180 => 666,  2177 => 665,  2174 => 664,  2171 => 663,  2168 => 662,  2165 => 661,  2162 => 660,  2159 => 659,  2156 => 658,  2153 => 657,  2150 => 656,  2147 => 655,  2145 => 654,  2142 => 653,  2139 => 652,  2136 => 651,  2134 => 650,  2131 => 649,  2122 => 644,  2119 => 643,  2116 => 642,  2113 => 641,  2110 => 640,  2107 => 639,  2105 => 638,  2102 => 637,  2093 => 632,  2089 => 630,  2083 => 628,  2081 => 627,  2076 => 626,  2070 => 624,  2068 => 623,  2063 => 622,  2060 => 621,  2057 => 620,  2054 => 619,  2051 => 618,  2048 => 617,  2045 => 616,  2042 => 615,  2039 => 614,  2036 => 613,  2033 => 612,  2030 => 611,  2027 => 610,  2025 => 609,  2022 => 608,  2015 => 604,  2011 => 602,  2006 => 600,  2002 => 599,  1998 => 598,  1993 => 597,  1987 => 594,  1983 => 593,  1979 => 592,  1973 => 591,  1968 => 590,  1966 => 589,  1960 => 588,  1957 => 587,  1954 => 586,  1952 => 585,  1949 => 584,  1946 => 583,  1943 => 582,  1940 => 581,  1937 => 580,  1934 => 579,  1931 => 578,  1928 => 577,  1925 => 576,  1922 => 575,  1919 => 574,  1916 => 573,  1914 => 572,  1911 => 571,  1908 => 570,  1905 => 569,  1903 => 568,  1900 => 567,  1892 => 563,  1890 => 559,  1888 => 558,  1885 => 557,  1880 => 553,  1858 => 548,  1855 => 547,  1852 => 546,  1849 => 545,  1846 => 544,  1843 => 543,  1840 => 542,  1837 => 541,  1834 => 540,  1832 => 539,  1829 => 538,  1826 => 537,  1823 => 536,  1820 => 535,  1817 => 534,  1814 => 533,  1812 => 532,  1809 => 531,  1806 => 530,  1803 => 529,  1801 => 528,  1798 => 527,  1795 => 526,  1792 => 525,  1790 => 524,  1787 => 523,  1784 => 522,  1781 => 521,  1778 => 520,  1775 => 519,  1772 => 518,  1769 => 517,  1766 => 516,  1763 => 515,  1761 => 514,  1758 => 513,  1755 => 512,  1753 => 511,  1750 => 510,  1742 => 505,  1738 => 504,  1733 => 503,  1730 => 502,  1722 => 498,  1719 => 497,  1717 => 496,  1714 => 495,  1706 => 491,  1703 => 490,  1701 => 489,  1698 => 488,  1683 => 484,  1680 => 483,  1677 => 482,  1674 => 481,  1671 => 480,  1668 => 479,  1665 => 478,  1662 => 477,  1659 => 476,  1657 => 475,  1654 => 474,  1646 => 470,  1643 => 469,  1641 => 468,  1638 => 467,  1630 => 463,  1627 => 462,  1625 => 461,  1622 => 460,  1614 => 456,  1611 => 455,  1609 => 454,  1606 => 453,  1597 => 447,  1594 => 446,  1591 => 445,  1589 => 444,  1586 => 443,  1578 => 439,  1575 => 438,  1573 => 437,  1570 => 436,  1562 => 432,  1559 => 431,  1557 => 430,  1554 => 429,  1547 => 424,  1545 => 420,  1542 => 419,  1540 => 418,  1537 => 417,  1529 => 413,  1526 => 412,  1524 => 411,  1521 => 410,  1513 => 406,  1510 => 405,  1508 => 404,  1506 => 403,  1503 => 402,  1496 => 397,  1490 => 396,  1485 => 395,  1481 => 394,  1476 => 393,  1473 => 392,  1470 => 391,  1464 => 389,  1461 => 388,  1459 => 387,  1456 => 386,  1448 => 380,  1446 => 379,  1445 => 378,  1444 => 377,  1443 => 376,  1438 => 375,  1435 => 374,  1429 => 372,  1426 => 371,  1424 => 370,  1421 => 369,  1412 => 363,  1408 => 419,  1404 => 361,  1400 => 416,  1395 => 359,  1392 => 358,  1386 => 356,  1383 => 412,  1381 => 354,  1378 => 353,  1362 => 349,  1360 => 348,  1357 => 347,  1341 => 397,  1339 => 396,  1336 => 395,  1329 => 336,  1324 => 333,  1322 => 332,  1316 => 330,  1310 => 328,  1304 => 325,  1300 => 324,  1284 => 323,  1281 => 322,  1278 => 321,  1275 => 320,  1272 => 319,  1269 => 318,  1266 => 317,  1263 => 316,  1260 => 315,  1257 => 314,  1255 => 313,  1251 => 368,  1243 => 309,  1238 => 307,  1231 => 358,  1228 => 357,  1225 => 304,  1222 => 303,  1220 => 302,  1217 => 301,  1214 => 300,  1211 => 349,  1208 => 298,  1205 => 297,  1202 => 347,  1199 => 295,  1196 => 294,  1193 => 293,  1191 => 292,  1188 => 291,  1186 => 290,  1183 => 289,  1180 => 288,  1178 => 287,  1175 => 286,  1168 => 332,  1165 => 281,  1161 => 279,  1156 => 276,  1154 => 327,  1148 => 273,  1142 => 271,  1136 => 268,  1132 => 267,  1116 => 266,  1113 => 265,  1110 => 264,  1107 => 263,  1104 => 262,  1101 => 261,  1098 => 313,  1095 => 312,  1092 => 258,  1089 => 257,  1087 => 256,  1084 => 307,  1076 => 253,  1071 => 251,  1064 => 298,  1061 => 249,  1058 => 248,  1055 => 247,  1052 => 246,  1050 => 245,  1047 => 244,  1044 => 243,  1041 => 242,  1038 => 241,  1035 => 240,  1032 => 283,  1029 => 282,  1026 => 237,  1023 => 236,  1020 => 235,  1017 => 234,  1014 => 272,  1012 => 271,  1009 => 270,  1006 => 230,  1003 => 229,  1001 => 228,  998 => 227,  981 => 223,  969 => 221,  962 => 218,  960 => 217,  955 => 252,  952 => 251,  934 => 241,  932 => 213,  929 => 212,  920 => 235,  917 => 206,  914 => 205,  908 => 203,  906 => 202,  901 => 201,  898 => 200,  895 => 199,  880 => 197,  878 => 219,  871 => 195,  868 => 194,  865 => 213,  863 => 192,  860 => 211,  854 => 187,  848 => 186,  842 => 184,  836 => 182,  833 => 199,  829 => 180,  824 => 179,  822 => 178,  819 => 177,  810 => 172,  804 => 170,  801 => 185,  799 => 168,  796 => 183,  789 => 162,  787 => 161,  776 => 159,  773 => 158,  765 => 156,  763 => 155,  760 => 154,  757 => 153,  754 => 152,  752 => 151,  749 => 162,  746 => 161,  743 => 148,  741 => 147,  738 => 146,  735 => 145,  733 => 144,  730 => 143,  723 => 138,  721 => 153,  714 => 135,  711 => 134,  709 => 133,  706 => 132,  698 => 130,  696 => 140,  693 => 128,  690 => 127,  687 => 126,  684 => 125,  681 => 124,  678 => 390,  676 => 385,  673 => 121,  670 => 120,  668 => 119,  665 => 118,  659 => 114,  649 => 122,  647 => 111,  644 => 110,  636 => 107,  628 => 104,  623 => 103,  621 => 102,  616 => 100,  612 => 99,  608 => 98,  604 => 96,  600 => 95,  594 => 93,  591 => 92,  588 => 91,  586 => 90,  583 => 334,  580 => 88,  577 => 329,  574 => 86,  571 => 85,  568 => 84,  565 => 324,  562 => 82,  559 => 81,  556 => 80,  553 => 184,  551 => 78,  548 => 313,  540 => 308,  537 => 176,  534 => 71,  531 => 70,  529 => 299,  526 => 68,  513 => 62,  507 => 60,  505 => 59,  500 => 291,  498 => 57,  495 => 289,  488 => 51,  486 => 286,  470 => 278,  467 => 72,  464 => 275,  458 => 43,  455 => 141,  450 => 64,  447 => 39,  442 => 134,  439 => 133,  429 => 33,  426 => 126,  420 => 123,  414 => 52,  408 => 50,  405 => 118,  396 => 22,  385 => 225,  382 => 17,  380 => 107,  377 => 37,  359 => 7,  357 => 6,  354 => 101,  350 => 26,  347 => 134,  342 => 23,  340 => 841,  335 => 21,  329 => 814,  327 => 126,  324 => 179,  319 => 124,  317 => 121,  307 => 743,  304 => 85,  302 => 168,  299 => 112,  297 => 694,  286 => 687,  284 => 106,  281 => 105,  279 => 104,  276 => 395,  274 => 637,  271 => 108,  266 => 366,  261 => 566,  259 => 149,  253 => 95,  233 => 71,  213 => 69,  210 => 75,  205 => 452,  200 => 52,  188 => 83,  185 => 68,  178 => 402,  175 => 53,  170 => 74,  160 => 70,  155 => 52,  148 => 60,  100 => 36,  14 => 1,  518 => 170,  516 => 294,  512 => 84,  501 => 161,  491 => 157,  481 => 184,  476 => 180,  473 => 48,  463 => 175,  460 => 143,  454 => 172,  452 => 268,  449 => 138,  431 => 34,  419 => 158,  417 => 243,  415 => 121,  411 => 120,  403 => 117,  399 => 23,  395 => 145,  391 => 20,  388 => 42,  376 => 133,  373 => 131,  371 => 35,  369 => 128,  366 => 106,  363 => 32,  361 => 207,  358 => 103,  356 => 119,  353 => 117,  351 => 135,  348 => 114,  345 => 848,  343 => 132,  339 => 191,  336 => 107,  332 => 20,  330 => 103,  313 => 15,  296 => 167,  291 => 691,  289 => 163,  287 => 93,  282 => 161,  270 => 157,  265 => 99,  256 => 96,  251 => 101,  248 => 100,  245 => 335,  232 => 84,  228 => 83,  225 => 87,  223 => 474,  218 => 467,  215 => 126,  212 => 74,  206 => 71,  198 => 66,  195 => 83,  192 => 85,  174 => 64,  165 => 72,  153 => 56,  124 => 31,  84 => 39,  81 => 25,  190 => 92,  186 => 111,  180 => 56,  172 => 51,  150 => 65,  146 => 49,  134 => 59,  126 => 42,  118 => 51,  114 => 71,  90 => 20,  76 => 37,  113 => 41,  110 => 40,  65 => 30,  34 => 16,  58 => 29,  23 => 18,  53 => 23,  480 => 75,  474 => 150,  469 => 158,  461 => 70,  457 => 173,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 162,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 110,  384 => 109,  381 => 137,  379 => 136,  374 => 217,  368 => 34,  365 => 141,  362 => 8,  360 => 104,  355 => 27,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 767,  309 => 117,  305 => 115,  298 => 91,  294 => 693,  285 => 111,  283 => 88,  278 => 160,  268 => 3,  264 => 2,  258 => 354,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 128,  214 => 69,  177 => 54,  169 => 49,  140 => 47,  132 => 58,  128 => 50,  107 => 52,  61 => 25,  273 => 394,  269 => 100,  254 => 147,  243 => 89,  240 => 139,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 79,  219 => 84,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 91,  143 => 59,  135 => 81,  119 => 28,  102 => 37,  71 => 25,  67 => 28,  63 => 30,  59 => 23,  28 => 14,  93 => 34,  88 => 60,  78 => 53,  201 => 72,  196 => 68,  183 => 410,  171 => 102,  166 => 100,  163 => 45,  158 => 53,  156 => 93,  151 => 188,  142 => 35,  138 => 36,  136 => 168,  121 => 75,  117 => 51,  105 => 27,  91 => 28,  62 => 29,  49 => 21,  87 => 33,  46 => 20,  44 => 19,  25 => 12,  21 => 12,  31 => 22,  94 => 35,  89 => 40,  85 => 34,  75 => 34,  68 => 31,  56 => 40,  27 => 8,  38 => 32,  26 => 20,  24 => 13,  19 => 11,  79 => 37,  72 => 25,  69 => 50,  47 => 21,  40 => 18,  37 => 17,  22 => 12,  246 => 99,  157 => 56,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 36,  115 => 33,  111 => 30,  108 => 48,  101 => 25,  98 => 44,  96 => 25,  83 => 41,  74 => 52,  66 => 29,  55 => 22,  52 => 17,  50 => 20,  43 => 33,  41 => 18,  35 => 17,  32 => 16,  29 => 21,  209 => 55,  203 => 122,  199 => 265,  193 => 429,  189 => 65,  187 => 60,  182 => 80,  176 => 77,  173 => 96,  168 => 60,  164 => 93,  162 => 71,  154 => 40,  149 => 85,  147 => 90,  144 => 62,  141 => 175,  133 => 64,  130 => 78,  125 => 45,  122 => 44,  116 => 45,  112 => 49,  109 => 69,  106 => 54,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 17,  82 => 33,  80 => 28,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 21,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 13,  30 => 15,);
    }
}
