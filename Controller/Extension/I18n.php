<?php

namespace Havvg\Bundle\CommonControllerBundle\Controller\Extension;

trait I18n
{
    /**
     * Gets a service by id.
     *
     * @param  string $id The service id
     *
     * @return object The service
     */
    abstract public function get($service);

    /**
     * Return the translator service.
     *
     * @return \Symfony\Component\Translation\TranslatorInterface
     */
    public function getTranslator()
    {
        return $this->get('translator');
    }

    /**
     * Translates the given message.
     *
     * @param string $id         The message id
     * @param array  $parameters An array of parameters for the message
     * @param string $domain     The domain for the message
     * @param string $locale     The locale
     *
     * @return string The translated string
     */
    public function trans($id, array $parameters = array(), $domain = null, $locale = null)
    {
        return $this->getTranslator()->trans($id, $parameters, $domain, $locale);
    }

    /**
     * Return the locale of the current request.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->getRequest()->getLocale();
    }
}