<?php

/* Emails/emailBody.html.twig */
class __TwigTemplate_c7089bf5eb2682fca343a7708719f832791f6f4eb0342ae92634d7bee81c41db extends Twig_Template
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
        $__internal_8b977af2ae2c6c06207824c7f788fa73918d43f5c45270b77402f4fd9bb3fa3c = $this->env->getExtension("native_profiler");
        $__internal_8b977af2ae2c6c06207824c7f788fa73918d43f5c45270b77402f4fd9bb3fa3c->enter($__internal_8b977af2ae2c6c06207824c7f788fa73918d43f5c45270b77402f4fd9bb3fa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/emailBody.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["nivel"]) ? $context["nivel"] : $this->getContext($context, "nivel")), "html", null, true);
        echo "</h1>

<p>Se ha producido una alarma en el nivel de <b>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["gas"]) ? $context["gas"] : $this->getContext($context, "gas")), "html", null, true);
        echo "</b> en el punto remoto ";
        echo twig_escape_filter($this->env, (isset($context["puntoRemoto"]) ? $context["puntoRemoto"] : $this->getContext($context, "puntoRemoto")), "html", null, true);
        echo " a las ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["ts"]) ? $context["ts"] : $this->getContext($context, "ts")), "H:i"), "html", null, true);
        echo ". El nivel de <b>";
        echo twig_escape_filter($this->env, (isset($context["gas"]) ? $context["gas"] : $this->getContext($context, "gas")), "html", null, true);
        echo "</b> se encuentra en <font style=\"color:red\">";
        echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["unidad"]) ? $context["unidad"] : $this->getContext($context, "unidad")), "html", null, true);
        echo "</font>.</p>

<p>Por favor comuníquese con el personal de turno para confirmar esta situación.</p>

<p><b>No responda este correo ya que ha sido generado en forma automática por el sistema de monitoreo y alarmas de MSA Chile.</b></p>

------------------------------<br>

<p><b>AVISO DE CONFIDENCIALIDAD.</b></p>
<p>Este correo y la información contenida o adjunta al mismo es privada y confidencial y va dirigida exclusivamente a su destinatario. K-Group informa a quien pueda haber recibido este correo por error que contiene información confidencial cuyo uso, copia, reproducción o distribución está expresamente prohibida. Si no es Ud. el destinatario del mismo y recibe este correo por error, le rogamos lo ponga en conocimiento del emisor y proceda a su eliminación sin copiarlo, imprimirlo o utilizarlo de ningún modo.</p>

<p><b>CONFIDENTIALITY WARNING.</b></p>
<p>This message and the information contained in or attached to it are private and confidential and intended exclusively for the addressee. K-Group informs to whom it may receive it in error that it contains privileged information and its use, copy, reproduction or distribution is prohibited. If you are not an intended recipient of this E-mail, please notify the sender, delete it and do not read, act upon, print, disclose, copy, retain or redistribute any portion of this E-mail. </p>";
        
        $__internal_8b977af2ae2c6c06207824c7f788fa73918d43f5c45270b77402f4fd9bb3fa3c->leave($__internal_8b977af2ae2c6c06207824c7f788fa73918d43f5c45270b77402f4fd9bb3fa3c_prof);

    }

    public function getTemplateName()
    {
        return "Emails/emailBody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <h1>{{ nivel }}</h1>*/
/* */
/* <p>Se ha producido una alarma en el nivel de <b>{{ gas }}</b> en el punto remoto {{ puntoRemoto }} a las {{ ts|date('H:i') }}. El nivel de <b>{{ gas }}</b> se encuentra en <font style="color:red">{{ valor }} {{ unidad }}</font>.</p>*/
/* */
/* <p>Por favor comuníquese con el personal de turno para confirmar esta situación.</p>*/
/* */
/* <p><b>No responda este correo ya que ha sido generado en forma automática por el sistema de monitoreo y alarmas de MSA Chile.</b></p>*/
/* */
/* ------------------------------<br>*/
/* */
/* <p><b>AVISO DE CONFIDENCIALIDAD.</b></p>*/
/* <p>Este correo y la información contenida o adjunta al mismo es privada y confidencial y va dirigida exclusivamente a su destinatario. K-Group informa a quien pueda haber recibido este correo por error que contiene información confidencial cuyo uso, copia, reproducción o distribución está expresamente prohibida. Si no es Ud. el destinatario del mismo y recibe este correo por error, le rogamos lo ponga en conocimiento del emisor y proceda a su eliminación sin copiarlo, imprimirlo o utilizarlo de ningún modo.</p>*/
/* */
/* <p><b>CONFIDENTIALITY WARNING.</b></p>*/
/* <p>This message and the information contained in or attached to it are private and confidential and intended exclusively for the addressee. K-Group informs to whom it may receive it in error that it contains privileged information and its use, copy, reproduction or distribution is prohibited. If you are not an intended recipient of this E-mail, please notify the sender, delete it and do not read, act upon, print, disclose, copy, retain or redistribute any portion of this E-mail. </p>*/
