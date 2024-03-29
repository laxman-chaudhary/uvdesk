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

/* @UVDeskSupportCenter/Templates/tinyMCE.html.twig */
class __TwigTemplate_381ed970723dabac89cd9c12f042e74743e90b9b4d5485d1bec4d5e72e68072f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/tinyMCE.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/tinyMCE.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/tinymce/themes/modern/theme.min.js"), "html", null, true);
        echo "\"></script>
<script scr=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script type=\"text/javascript\">

    var sfTinyMce = {
        tinymce : tinymce,
        options : {
            browser_spellcheck : true,
            selector: '.uv-view textarea',
            branding: false,
            relative_urls : false,
            remove_script_host : false,
            convert_urls: true,
            image_title: true,
            autoresize_max_height: 350,
            theme: 'modern',
            menubar: false,
            height: 150,
            toolbar: '| undo redo | bold italic forecolor | bullist numlist | link image',                                        
            spellchecker_languages: 'English=en',
            plugins: [
                'spellchecker  autolink lists link charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'media nonbreaking table directionality',
                'emoticons template paste textcolor colorpicker textpattern codesample toc',
                'autoresize image imagetools',
                'mention',
            ],
            invalid_elements : 'script,style,input,textarea,form,onmouseover,onmouseout,onclick',
            // paste_as_text: true,
            paste_data_images: true,
            image_advtab: true,
            mentions : {
                source: function(){
                    return [];
                },
            },
        },
        init : function (options){
            if(typeof(options.setup) === 'function'){
                let optionsSetup = options.setup;
                this.options.setup = function(editor){
                    sfTinyMce.initImageUpload(editor);
                    optionsSetup(editor);
                }
                delete options.setup;
            }else{
                this.options.setup = function(editor){
                    sfTinyMce.initImageUpload(editor);
                }

                delete options.setup;
            }

            this.options = \$.extend({}, this.options, options)
            window.tinymce.dom.Event.domLoaded = true;
            tinymce.init(this.options);
        },
        html : function(selector, html){
            tinymce.get(selector).setContent(html);
        },
        initImageUpload : function(editor) {
            // create input and insert in the DOM
            var inp = \$('<input id=\"tinymce-uploader\" type=\"file\" name=\"pic\" accept=\"image/*\" style=\"display:none\">');
            \$(editor.getElement()).parent().append(inp);

            // add the image upload button to the editor toolbar
            editor.addButton('imageupload', {
                text: '',
                icon: 'image',
                onclick: function(e) { // when toolbar button is clicked, open file select modal
                    inp.trigger('click');
                }
            });

            // when a file is selected, upload it to the server
            inp.on(\"change\", function(e){
                sfTinyMce.uploadFile(\$(this), editor);
            });
        },
        uploadFile : function(input, editor) {
            sendFile(input.get(0).files).done(function(json){
                    //remove loading image
                    if(json['error'] != ''){
                        var response = {
                            'alertClass' : 'danger',
                            'alertMessage' : json['error'],
                        };
                        app.appView.hideLoader();
                        app.appView.renderResponseAlert(response);
                    }else if(json['fileNames']){
                        \$.each(json['fileNames'], function(key, path){
                            editor.insertContent('<img class=\"content-img\" src=\"' + path + '\"/>');
                        });
                    }
                    if(json.location != undefined)
                        window.location = json.location;
                })
                .fail(function(xhr) {
                    if(url = xhr.getResponseHeader('Location'))
                        window.location = url;

                    app.appView.hideLoader();
                    app.appView.renderResponseAlert(warningResponse);
                })
            ;
        },
    }

    function sendFile(files) {
        var data = new FormData();
        var nonEmptyFlag;
        \$.each(files, function(key, file){
            var patt = new RegExp(\"(image/)(?!tif)\");
            if(file.type && patt.test(file.type)) {
                data.append(\"attachments[]\", file);
                nonEmptyFlag = true;
            }
        });
        ";
        // line 136
        echo "    }

    function sendUrls(url) {
        ";
        // line 146
        echo "    }

    function removeFile(file) {
        ";
        // line 156
        echo "    }
    addTranslateButton = function(editor) {
        ";
        // line 187
        echo "    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Templates/tinyMCE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 187,  181 => 156,  176 => 146,  171 => 136,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ asset('bundles/uvdeskcoreframework/js/tinymce/tinymce.min.js') }}\"></script>
<script src=\"{{ asset('bundles/uvdeskcoreframework/js/tinymce/themes/modern/theme.min.js')}}\"></script>
<script scr=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script type=\"text/javascript\">

    var sfTinyMce = {
        tinymce : tinymce,
        options : {
            browser_spellcheck : true,
            selector: '.uv-view textarea',
            branding: false,
            relative_urls : false,
            remove_script_host : false,
            convert_urls: true,
            image_title: true,
            autoresize_max_height: 350,
            theme: 'modern',
            menubar: false,
            height: 150,
            toolbar: '| undo redo | bold italic forecolor | bullist numlist | link image',                                        
            spellchecker_languages: 'English=en',
            plugins: [
                'spellchecker  autolink lists link charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'media nonbreaking table directionality',
                'emoticons template paste textcolor colorpicker textpattern codesample toc',
                'autoresize image imagetools',
                'mention',
            ],
            invalid_elements : 'script,style,input,textarea,form,onmouseover,onmouseout,onclick',
            // paste_as_text: true,
            paste_data_images: true,
            image_advtab: true,
            mentions : {
                source: function(){
                    return [];
                },
            },
        },
        init : function (options){
            if(typeof(options.setup) === 'function'){
                let optionsSetup = options.setup;
                this.options.setup = function(editor){
                    sfTinyMce.initImageUpload(editor);
                    optionsSetup(editor);
                }
                delete options.setup;
            }else{
                this.options.setup = function(editor){
                    sfTinyMce.initImageUpload(editor);
                }

                delete options.setup;
            }

            this.options = \$.extend({}, this.options, options)
            window.tinymce.dom.Event.domLoaded = true;
            tinymce.init(this.options);
        },
        html : function(selector, html){
            tinymce.get(selector).setContent(html);
        },
        initImageUpload : function(editor) {
            // create input and insert in the DOM
            var inp = \$('<input id=\"tinymce-uploader\" type=\"file\" name=\"pic\" accept=\"image/*\" style=\"display:none\">');
            \$(editor.getElement()).parent().append(inp);

            // add the image upload button to the editor toolbar
            editor.addButton('imageupload', {
                text: '',
                icon: 'image',
                onclick: function(e) { // when toolbar button is clicked, open file select modal
                    inp.trigger('click');
                }
            });

            // when a file is selected, upload it to the server
            inp.on(\"change\", function(e){
                sfTinyMce.uploadFile(\$(this), editor);
            });
        },
        uploadFile : function(input, editor) {
            sendFile(input.get(0).files).done(function(json){
                    //remove loading image
                    if(json['error'] != ''){
                        var response = {
                            'alertClass' : 'danger',
                            'alertMessage' : json['error'],
                        };
                        app.appView.hideLoader();
                        app.appView.renderResponseAlert(response);
                    }else if(json['fileNames']){
                        \$.each(json['fileNames'], function(key, path){
                            editor.insertContent('<img class=\"content-img\" src=\"' + path + '\"/>');
                        });
                    }
                    if(json.location != undefined)
                        window.location = json.location;
                })
                .fail(function(xhr) {
                    if(url = xhr.getResponseHeader('Location'))
                        window.location = url;

                    app.appView.hideLoader();
                    app.appView.renderResponseAlert(warningResponse);
                })
            ;
        },
    }

    function sendFile(files) {
        var data = new FormData();
        var nonEmptyFlag;
        \$.each(files, function(key, file){
            var patt = new RegExp(\"(image/)(?!tif)\");
            if(file.type && patt.test(file.type)) {
                data.append(\"attachments[]\", file);
                nonEmptyFlag = true;
            }
        });
        {# var path = \"{{ '/customer/' in app.request.requestUri ? path('ajax_file_upload_customer') : path('ajax_file_upload') }}\";
        if(nonEmptyFlag) {
            return \$.ajax({
                    data: data,
                    type: \"POST\",
                    enctype: 'multipart/form-data',
                    url: path,
                    processData: false,
                    contentType: false,
                    cache: false,
                });
        } else {
            app.appView.renderResponseAlert({'alertClass': 'danger', 'alertMessage': '{{ \"Warning! Select valid image file.\"|trans }}' });
        } #}
    }

    function sendUrls(url) {
        {# var path = \"{{ '/customer/' in app.request.requestUri ? path('ajax_url_file_customer') : path('ajax_url_file') }}\";
        return \$.ajax({
                    data: {'url': url},
                    type: \"POST\",
                    url: path,
                    dataType: 'json'
                }); #}
    }

    function removeFile(file) {
        {# var path = \"{{ '/customer/' in app.request.requestUri ? path('ajax_file_remove_customer') : path('ajax_file_remove') }}\";
        return \$.ajax({
                    data: {'path': file},
                    type: \"POST\",
                    url: path,
                    dataType: 'json'
                }); #}
    }
    addTranslateButton = function(editor) {
        {# editor.addButton('translate', {
            type: 'listbox',
            title : 'selectContentAndTranslate',
            text: '{{ \"Translate\"|trans }}',
            onselect: function (e) {
                this.text('{{ \"Translate\"|trans }}');
                if(editor.selection.getContent({format : 'html'})) {
                    ajaxData = {
                        'lang': this.value(),
                        'content': editor.selection.getContent({format : 'html'}),
                    };
                    tinyMCE.activeEditor.setProgressState(true);
                } else {
                    editor.notificationManager.close();
                    editor.notificationManager.open({
                        text: '{{ \"Select text then select language to translate text.\"|trans }}',
                        type: 'info',
                        timeout: 3000,
                        closeButton: true
                    });
                }
            },
            values: [
                {% for value, text in application_service.getTranslationSupportedLanguages() %}
                    { text: '{{ text }}', value: '{{ value }}' },
                {% endfor %}
                { text: '“Powered by Yandex.Translate”', value: '', disabled: true },
            ],
        }); #}
    }
</script>", "@UVDeskSupportCenter/Templates/tinyMCE.html.twig", "/home/lexcorp.xyz/public_html/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Templates/tinyMCE.html.twig");
    }
}
