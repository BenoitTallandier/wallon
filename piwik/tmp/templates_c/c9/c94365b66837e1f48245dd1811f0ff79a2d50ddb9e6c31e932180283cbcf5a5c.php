<?php

/* @CoreHome/_dataTableJS.twig */
class __TwigTemplate_12d9b47c79cb6f76ba159b951b88515bb1f78409d96c57bc0dc5742cecf10432 extends Twig_Template
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
        echo "<script type=\"text/javascript\" defer=\"defer\">
    \$(document).ready(function () {
        require('piwik/UI/DataTable').initNewDataTables();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableJS.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script type="text/javascript" defer="defer">*/
/*     $(document).ready(function () {*/
/*         require('piwik/UI/DataTable').initNewDataTables();*/
/*     });*/
/* </script>*/
/* */
