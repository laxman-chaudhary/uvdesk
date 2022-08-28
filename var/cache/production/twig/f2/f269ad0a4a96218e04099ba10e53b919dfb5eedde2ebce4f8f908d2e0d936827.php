<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @UVDeskCoreFramework/Templates/attachment.html.twig */
class __TwigTemplate_ea58a51c90b8081729b2462ac20e9e551c9e9f808c3e449647f33222c629aad2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/attachment.html.twig"));

        // line 1
        echo "<style>
    input.attachment {
        display: none;
    }
</style>
<script type=\"text/javascript\">
    \$(function () {
        var FileView = Backbone.View.extend({
            fileCounter: 0,
            max_post_size: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["max_post_size"]) || array_key_exists("max_post_size", $context) ? $context["max_post_size"] : (function () { throw new RuntimeError('Variable "max_post_size" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ",
            max_file_uploads: ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["max_file_uploads"]) || array_key_exists("max_file_uploads", $context) ? $context["max_file_uploads"] : (function () { throw new RuntimeError('Variable "max_file_uploads" does not exist.', 11, $this->source); })()), "html", null, true);
        echo ",
            upload_max_filesize: ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["upload_max_filesize"]) || array_key_exists("upload_max_filesize", $context) ? $context["upload_max_filesize"] : (function () { throw new RuntimeError('Variable "upload_max_filesize" does not exist.', 12, $this->source); })()), "html", null, true);
        echo ",
            el: '.attachment-block',
            events : {
                'click .uv-file-label': 'createFileType',
                'change .attachment': 'selectFile',
                'click .uv-added-attachment span': 'removeFile',
                'click .uv-field-message': 'removeError',
            },
            createFileType: function(e) {
                this.removeError(e)
                var currentElement = Backbone.\$(e.currentTarget),
                    attachmentBlock = currentElement.parents('.attachment-block')
                if (attachmentBlock.children('.uv-added-attachment').length + 1 > this.max_file_uploads) {
                    attachmentBlock.append(this.getDefaultErrorMessage())
                    return;
                }
                this.fileCounter += 1;
                attachmentBlock.append('<div class=\"uv-added-attachment\" style=\"display: none\" id=\"file-' + this.fileCounter + '\"><div class=\"uv-attachment\"><input type=\"file\" name=\"attachments[]\" class=\"attachment\" multiple=\"multiple\"></div><span></span></div>')
                \$('#file-' + this.fileCounter).find('.attachment').trigger('click')
            },
            labelTemplate: _.template('<label class=\"file-name\"><%- fileName %></label><br>'),
            selectFile: function(e) {
                var currentElement = Backbone.\$(e.currentTarget);
                var attachmentBlock = currentElement.parents(\".uv-added-attachment\");
                var isError = false;
                
                if (currentElement.length) {
                    files = currentElement[0].files; 

                    if (files.length) {
                        for (var i = 0; i < files.length; i++) {
                            var fileName = files[i].name;
                            
                            if (files[i].size > this.upload_max_filesize) {
                                isError = true;
                                break;
                            }

                            // Validating Form Size
                            var formSize = 0
                            var formData = new FormData(currentElement.parents('form')[0])
                            
                            for (var pair of formData.entries()) {
                                if (pair[1] instanceof Blob) {
                                    formSize += pair[1].size
                                } else {
                                    formSize += pair[1].length
                                }
                            }

                            if (formSize > this.max_post_size) {
                                isError = true
                            }

                            attachmentBlock.append(this.labelTemplate({'fileName': fileName}));
                        }
                    }
                }
                
                if (isError) {
                    attachmentBlock.parents('.attachment-block').append(this.getDefaultErrorMessage())
                    attachmentBlock.remove()
                    return
                }

                attachmentBlock.show()
            },
            removeFile: function(e) {
                this.removeError(e)
                Backbone.\$(e.currentTarget).parents('.uv-added-attachment').remove()
            },
            getDefaultErrorMessage: function() {
                return '<span class=\"uv-field-message\">You can send up to ' + Math.floor(this.upload_max_filesize/(1024*1024)) + ' MB in attachments. If you have more than one attachment, they can\\'t add up to more than ' + Math.floor(this.max_post_size/(1024*1024))  + ' MB and ' + this.max_file_uploads + ' attachments in total.</span>'
            },
            removeError: function(e) {
                Backbone.\$(e.currentTarget).parents('.attachment-block').find('.uv-field-message').remove()
            }   
        });
        
        var fileView = new FileView();
    });
</script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/Templates/attachment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  55 => 11,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    input.attachment {
        display: none;
    }
</style>
<script type=\"text/javascript\">
    \$(function () {
        var FileView = Backbone.View.extend({
            fileCounter: 0,
            max_post_size: {{ max_post_size }},
            max_file_uploads: {{ max_file_uploads }},
            upload_max_filesize: {{ upload_max_filesize }},
            el: '.attachment-block',
            events : {
                'click .uv-file-label': 'createFileType',
                'change .attachment': 'selectFile',
                'click .uv-added-attachment span': 'removeFile',
                'click .uv-field-message': 'removeError',
            },
            createFileType: function(e) {
                this.removeError(e)
                var currentElement = Backbone.\$(e.currentTarget),
                    attachmentBlock = currentElement.parents('.attachment-block')
                if (attachmentBlock.children('.uv-added-attachment').length + 1 > this.max_file_uploads) {
                    attachmentBlock.append(this.getDefaultErrorMessage())
                    return;
                }
                this.fileCounter += 1;
                attachmentBlock.append('<div class=\"uv-added-attachment\" style=\"display: none\" id=\"file-' + this.fileCounter + '\"><div class=\"uv-attachment\"><input type=\"file\" name=\"attachments[]\" class=\"attachment\" multiple=\"multiple\"></div><span></span></div>')
                \$('#file-' + this.fileCounter).find('.attachment').trigger('click')
            },
            labelTemplate: _.template('<label class=\"file-name\"><%- fileName %></label><br>'),
            selectFile: function(e) {
                var currentElement = Backbone.\$(e.currentTarget);
                var attachmentBlock = currentElement.parents(\".uv-added-attachment\");
                var isError = false;
                
                if (currentElement.length) {
                    files = currentElement[0].files; 

                    if (files.length) {
                        for (var i = 0; i < files.length; i++) {
                            var fileName = files[i].name;
                            
                            if (files[i].size > this.upload_max_filesize) {
                                isError = true;
                                break;
                            }

                            // Validating Form Size
                            var formSize = 0
                            var formData = new FormData(currentElement.parents('form')[0])
                            
                            for (var pair of formData.entries()) {
                                if (pair[1] instanceof Blob) {
                                    formSize += pair[1].size
                                } else {
                                    formSize += pair[1].length
                                }
                            }

                            if (formSize > this.max_post_size) {
                                isError = true
                            }

                            attachmentBlock.append(this.labelTemplate({'fileName': fileName}));
                        }
                    }
                }
                
                if (isError) {
                    attachmentBlock.parents('.attachment-block').append(this.getDefaultErrorMessage())
                    attachmentBlock.remove()
                    return
                }

                attachmentBlock.show()
            },
            removeFile: function(e) {
                this.removeError(e)
                Backbone.\$(e.currentTarget).parents('.uv-added-attachment').remove()
            },
            getDefaultErrorMessage: function() {
                return '<span class=\"uv-field-message\">You can send up to ' + Math.floor(this.upload_max_filesize/(1024*1024)) + ' MB in attachments. If you have more than one attachment, they can\\'t add up to more than ' + Math.floor(this.max_post_size/(1024*1024))  + ' MB and ' + this.max_file_uploads + ' attachments in total.</span>'
            },
            removeError: function(e) {
                Backbone.\$(e.currentTarget).parents('.attachment-block').find('.uv-field-message').remove()
            }   
        });
        
        var fileView = new FileView();
    });
</script>", "@UVDeskCoreFramework/Templates/attachment.html.twig", "/home/support.telenet.com.np/public_html/vendor/uvdesk/core-framework/Resources/views/Templates/attachment.html.twig");
    }
}
