<?php

/* shout.html.twig */
class __TwigTemplate_baf0a50737db2e5370755e398816cc36443948b8a9b1d71a3620cb152f11191b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Shout Box</title>
    </head>
    <body>
        ";
        // line 8
        if ( !twig_test_empty((isset($context["error"]) ? $context["error"] : null))) {
            // line 9
            echo "            <p><b><i>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</i></b></p>
        ";
        }
        // line 11
        echo "     
        <form method=\"post\">
            Input your message: <input type=\"text\" name=\"message\">
            <input type=\"submit\" value=\"Shout!\">            
        </form>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messageList"]) ? $context["messageList"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "            <p>* ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "            <p><i>No shouts yet.</i></p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "shout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  56 => 19,  48 => 17,  43 => 16,  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>Shout Box</title>*/
/*     </head>*/
/*     <body>*/
/*         {% if not error is empty %}*/
/*             <p><b><i>{{ error }}</i></b></p>*/
/*         {% endif %}*/
/*      */
/*         <form method="post">*/
/*             Input your message: <input type="text" name="message">*/
/*             <input type="submit" value="Shout!">            */
/*         </form>*/
/*         {% for message in messageList %}*/
/*             <p>* {{ message }}</p>*/
/*         {% else %}*/
/*             <p><i>No shouts yet.</i></p>*/
/*         {% endfor %}*/
/*     </body>*/
/* </html>*/
