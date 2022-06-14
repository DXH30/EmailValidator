<?php
namespace DXH30\EmailValidator;
require './vendor/autoload.php';

class Validate {
    private $blacklistedDomains;

    /* @description
     * validate email if it is not inside blacklisted domains
     * @return boolean
     */
    public function validate($email) {
        $domain = explode('@', $email)[1];
        if (in_array($this->blacklistedDomains, $domain)) { 
            throw new Exception("the email domain: $domain is inside blacklisted domains");
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
     */

    public function getBlacklistedDomains() {
        return $this->blacklistedDomains;
    }
}
