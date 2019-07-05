<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
$host = 'hostnameYourLdapServer';
$port = '389';

if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dn = 'ou=directory(e.g. Users),dc=example,dc=com'; // base dn path e.g. 'ou=Groups,dc=example,DC=com'
    $baseGroup = 'OU=directory,OU=directory,DC=example,DC=com'; // base dn group path e.g.'OU=Distribution,OU=Groups,DC=example,DC=com'
    $memberGroupPath = "CN=Admins,";
    $userDomain = 'example.com'; // Domain that will be substituted for the sign '@'
    $filter="(samaccountname=$username)";

    if (file_exists(__DIR__.'/config_local.php')) {
        include __DIR__.'/config_local.php';
    }

    // Connect to LDAP server
    $ldap = ldap_connect($host, $port);

    if (!$ldap) 
    {
        $error = 'No connect to Ldap server';
    } else 
    {
        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
        $bind = ldap_bind($ldap, $username.'@'.$userDomain, $password) or print('<div class="error">' . 'Error' . '</div>');
        ldap_get_option($ldap, LDAP_OPT_DIAGNOSTIC_MESSAGE, $extended_error);
    }

    if ($bind)
    {
        //determine the LDAP Path from Active Directory details
        $result = ldap_search($ldap, $dn, $filter);
        $entries = ldap_get_entries($ldap,$result);
        
        if (!$result)
            $error = 'Result: '. ldap_error($ldap);
        else
        {
            session_start();
            $justthese = array("extensionAttribute1", "extensionAttribute2", "ou", "sn", "samaccountname", "memberOf", "givenname", "mail",);
            $sr=ldap_search($ldap, $dn, $filter, $justthese);
            $info = ldap_get_entries($ldap, $sr);
            ldap_unbind($ldap);

            // проверяем группу
            $memberof = $info[0]['memberof'];
            $uName = ($info["0"]["extensionattribute1"]["0"]) . ' ' . ($info["0"]["extensionattribute2"]["0"]);

            if (in_array("CN=yourGroup,OU=Distribution,OU=Role Based Access Permissions,OU=_Groups,DC=example,DC=com", $memberof)) {
                $_SESSION['s']=$info;
                header('Location: ../public/successAuth.php'); 
            } else { 
                print '<div class="error">' . $uName . '<br>' . 'You do not have the right group. ' . '</div>';
                return false;
            }
        }
    }
}
