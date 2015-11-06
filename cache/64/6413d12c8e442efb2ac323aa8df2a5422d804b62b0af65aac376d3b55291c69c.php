<?php

/* shout.html.twig */
class __TwigTemplate_914d92b8f29a49fb56c73fb4491e7d824e9c1093b014efeef1d253e1e835d497 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title></title>
    </head>
    <body>
        
        ";
        // line 15
        if ( !twig_test_empty((isset($context["error"]) ? $context["error"] : null))) {
            // line 16
            echo "            <p><b><i>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</i></b></p>
        ";
        }
        // line 18
        echo "        
        <form method=\"post\">
            Input your message: <input name=\"message\" type=\"text\">
            <input type=\"submit\" value=\"Shout\">
        </form>
        
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messageList"]) ? $context["messageList"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "            <p>* ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "            <p><i>No shouts yet.</i></p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        
        
    </body>
</html>
";
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
        return array (  70 => 29,  63 => 27,  55 => 25,  50 => 24,  42 => 18,  36 => 16,  34 => 15,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!DOCTYPE html>*/
/* <!--*/
/* To change this license header, choose License Headers in Project Properties.*/
/* To change this template file, choose Tools | Templates*/
/* and open the template in the editor.*/
/* -->*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title></title>*/
/*     </head>*/
/*     <body>*/
/*         */
/*         {% if not error is empty %}*/
/*             <p><b><i>{{ error }}</i></b></p>*/
/*         {% endif %}*/
/*         */
/*         <form method="post">*/
/*             Input your message: <input name="message" type="text">*/
/*             <input type="submit" value="Shout">*/
/*         </form>*/
/*         */
/*         {% for message in messageList %}*/
/*             <p>* {{ message }}</p>*/
/*         {% else %}*/
/*             <p><i>No shouts yet.</i></p>*/
/*         {% endfor %}*/
/*         */
/*         */
/*     </body>*/
/* </html>*/
/* */
