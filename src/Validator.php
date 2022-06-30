<?php
namespace DXH30\EmailValidator;
require './vendor/autoload.php';

class Validator {
    public static $blacklistedDomains;

    /* @description
     * validate email if it is not inside blacklisted domains
     * @return boolean
     */
    public function validate($email) {
        $domain = explode('@', $email)[1];
        if (in_array($domain, Validator::$blacklistedDomains)) { 
            return false;
        } else {
            return true;
        }
    }

    /* @description
     * set blacklisted domains
     * @return boolean
     */
    public function setBlacklistedDomains($domains = array()) {
        return Validator::$blacklistedDomains = $domains;
    }

    /* @description
     * get blacklisted domains
     * @return array
     */

    public function getBlacklistedDomains() {
        return Validator::$blacklistedDomains;
    }

    /* @description
     * append domain to blacklisteddomains
     * @return boolean
     */

    public function appendBlacklistedDomain($domain) {
        return array_push(Validator::$blacklistedDomains, $domain);
    }
}
