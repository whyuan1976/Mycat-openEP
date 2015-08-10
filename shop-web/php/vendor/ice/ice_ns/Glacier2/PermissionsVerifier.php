<?php
// **********************************************************************
//
// Copyright (c) 2003-2013 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.5.1
//
// <auto-generated>
//
// Generated from file `PermissionsVerifier.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Glacier2/SSLInfo.php';
}

namespace Glacier2
{
    if(!class_exists('\\Glacier2\\PermissionDeniedException'))
    {
        class PermissionDeniedException extends \Ice\UserException
        {
            public function __construct($reason='')
            {
                $this->reason = $reason;
            }

            public function ice_name()
            {
                return 'Glacier2::PermissionDeniedException';
            }

            public function __toString()
            {
                global $Glacier2__t_PermissionDeniedException;
                return IcePHP_stringifyException($this, $Glacier2__t_PermissionDeniedException);
            }

            public $reason;
        }

        $Glacier2__t_PermissionDeniedException = IcePHP_defineException('::Glacier2::PermissionDeniedException', '\\Glacier2\\PermissionDeniedException', true, null, array(
            array('reason', $IcePHP__t_string, false, 0)));
    }
}

namespace Glacier2
{
    if(!interface_exists('\\Glacier2\\PermissionsVerifier'))
    {
        interface PermissionsVerifier
        {
            public function checkPermissions($userId, $password, $reason);
        }

        class PermissionsVerifierPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Glacier2::PermissionsVerifier', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Glacier2::PermissionsVerifier', $facet);
            }
        }

        $Glacier2__t_PermissionsVerifier = IcePHP_defineClass('::Glacier2::PermissionsVerifier', '\\Glacier2\\PermissionsVerifier', -1, true, false, $Ice__t_Object, null, null);

        $Glacier2__t_PermissionsVerifierPrx = IcePHP_defineProxy($Glacier2__t_PermissionsVerifier);

        IcePHP_defineOperation($Glacier2__t_PermissionsVerifier, 'checkPermissions', 2, 1, 2, array(array($IcePHP__t_string, false, 0), array($IcePHP__t_string, false, 0)), array(array($IcePHP__t_string, false, 0)), array($IcePHP__t_bool, false, 0), array($Glacier2__t_PermissionDeniedException));
    }
}

namespace Glacier2
{
    if(!interface_exists('\\Glacier2\\SSLPermissionsVerifier'))
    {
        interface SSLPermissionsVerifier
        {
            public function authorize($info, $reason);
        }

        class SSLPermissionsVerifierPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Glacier2::SSLPermissionsVerifier', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Glacier2::SSLPermissionsVerifier', $facet);
            }
        }

        $Glacier2__t_SSLPermissionsVerifier = IcePHP_defineClass('::Glacier2::SSLPermissionsVerifier', '\\Glacier2\\SSLPermissionsVerifier', -1, true, false, $Ice__t_Object, null, null);

        $Glacier2__t_SSLPermissionsVerifierPrx = IcePHP_defineProxy($Glacier2__t_SSLPermissionsVerifier);

        IcePHP_defineOperation($Glacier2__t_SSLPermissionsVerifier, 'authorize', 2, 1, 2, array(array($Glacier2__t_SSLInfo, false, 0)), array(array($IcePHP__t_string, false, 0)), array($IcePHP__t_bool, false, 0), array($Glacier2__t_PermissionDeniedException));
    }
}
?>