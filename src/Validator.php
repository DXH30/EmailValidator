<?php
namespace DXH30\EmailValidator;
require './vendor/autoload.php';

class Validator {
    private $blacklistedDomains;

    /* @description
     * validate email if it is not inside blacklisted domains
     * @return boolean
     */
    public function validate($email) {
        $domain = explode('@', $email)[1];
        if (in_array($domain, $this->blacklistedDomains)) { 
            return false;
        } else {
            return true;
        }
    }

    /* @description
     * set blacklisted domains
     */
    public function setBlacklistedDomains($domains = array()) {
        $this->blacklistedDomains = $domains;
    }

    /* @description
     * get blacklisted domains
     * @return array
     */

    public function getBlacklistedDomains() {
        return $this->blacklistedDomains;
    }
}
