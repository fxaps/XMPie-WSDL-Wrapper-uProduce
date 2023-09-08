<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetPermissionEntry;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\PermissionEntity;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetPermissionEntryResponse;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetPermissionEntry;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\PermissionEx;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\PermissionDetails;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetPermissionEntryResponse;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetPermissionsEntries;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\ArrayOfPermissionEx;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetPermissionsEntriesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\RemovePermissionEntry;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\RemovePermissionEntryResponse;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\RemovePermissionsEntries;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\RemovePermissionsEntriesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetPermissions;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetPermissionsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetActorPermissions;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetActorPermissionsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetResourcePermissions;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetResourcePermissionsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetActorPermissions;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetActorPermissionsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetResourcePermissions;
use XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\SetResourcePermissionsResponse;


class FabricatePermissionsEx_SSP
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPermissionEntry
    */
    public function GetPermissionEntry($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPermissionEntry = new GetPermissionEntry();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPermissionEntry, $methodName)) {
                $GetPermissionEntry->$methodName($paramValue);
            }
        }
        return $GetPermissionEntry;
    }


   /**
    * @param array $paramAutoSet
    * @return PermissionEntity
    */
    public function PermissionEntity($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PermissionEntity = new PermissionEntity();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PermissionEntity, $methodName)) {
                $PermissionEntity->$methodName($paramValue);
            }
        }
        return $PermissionEntity;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPermissionEntryResponse
    */
    public function GetPermissionEntryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPermissionEntryResponse = new GetPermissionEntryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPermissionEntryResponse, $methodName)) {
                $GetPermissionEntryResponse->$methodName($paramValue);
            }
        }
        return $GetPermissionEntryResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPermissionEntry
    */
    public function SetPermissionEntry($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPermissionEntry = new SetPermissionEntry();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPermissionEntry, $methodName)) {
                $SetPermissionEntry->$methodName($paramValue);
            }
        }
        return $SetPermissionEntry;
    }


   /**
    * @param array $paramAutoSet
    * @return PermissionEx
    */
    public function PermissionEx($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PermissionEx = new PermissionEx();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PermissionEx, $methodName)) {
                $PermissionEx->$methodName($paramValue);
            }
        }
        return $PermissionEx;
    }


   /**
    * @param array $paramAutoSet
    * @return PermissionDetails
    */
    public function PermissionDetails($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PermissionDetails = new PermissionDetails();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PermissionDetails, $methodName)) {
                $PermissionDetails->$methodName($paramValue);
            }
        }
        return $PermissionDetails;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPermissionEntryResponse
    */
    public function SetPermissionEntryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPermissionEntryResponse = new SetPermissionEntryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPermissionEntryResponse, $methodName)) {
                $SetPermissionEntryResponse->$methodName($paramValue);
            }
        }
        return $SetPermissionEntryResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPermissionsEntries
    */
    public function SetPermissionsEntries($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPermissionsEntries = new SetPermissionsEntries();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPermissionsEntries, $methodName)) {
                $SetPermissionsEntries->$methodName($paramValue);
            }
        }
        return $SetPermissionsEntries;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPermissionEx
    */
    public function ArrayOfPermissionEx($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPermissionEx = new ArrayOfPermissionEx();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPermissionEx, $methodName)) {
                $ArrayOfPermissionEx->$methodName($paramValue);
            }
        }
        return $ArrayOfPermissionEx;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPermissionsEntriesResponse
    */
    public function SetPermissionsEntriesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPermissionsEntriesResponse = new SetPermissionsEntriesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPermissionsEntriesResponse, $methodName)) {
                $SetPermissionsEntriesResponse->$methodName($paramValue);
            }
        }
        return $SetPermissionsEntriesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RemovePermissionEntry
    */
    public function RemovePermissionEntry($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemovePermissionEntry = new RemovePermissionEntry();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemovePermissionEntry, $methodName)) {
                $RemovePermissionEntry->$methodName($paramValue);
            }
        }
        return $RemovePermissionEntry;
    }


   /**
    * @param array $paramAutoSet
    * @return RemovePermissionEntryResponse
    */
    public function RemovePermissionEntryResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemovePermissionEntryResponse = new RemovePermissionEntryResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemovePermissionEntryResponse, $methodName)) {
                $RemovePermissionEntryResponse->$methodName($paramValue);
            }
        }
        return $RemovePermissionEntryResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RemovePermissionsEntries
    */
    public function RemovePermissionsEntries($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemovePermissionsEntries = new RemovePermissionsEntries();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemovePermissionsEntries, $methodName)) {
                $RemovePermissionsEntries->$methodName($paramValue);
            }
        }
        return $RemovePermissionsEntries;
    }


   /**
    * @param array $paramAutoSet
    * @return RemovePermissionsEntriesResponse
    */
    public function RemovePermissionsEntriesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemovePermissionsEntriesResponse = new RemovePermissionsEntriesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemovePermissionsEntriesResponse, $methodName)) {
                $RemovePermissionsEntriesResponse->$methodName($paramValue);
            }
        }
        return $RemovePermissionsEntriesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPermissions
    */
    public function GetPermissions($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPermissions = new GetPermissions();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPermissions, $methodName)) {
                $GetPermissions->$methodName($paramValue);
            }
        }
        return $GetPermissions;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPermissionsResponse
    */
    public function GetPermissionsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPermissionsResponse = new GetPermissionsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPermissionsResponse, $methodName)) {
                $GetPermissionsResponse->$methodName($paramValue);
            }
        }
        return $GetPermissionsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetActorPermissions
    */
    public function GetActorPermissions($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetActorPermissions = new GetActorPermissions();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetActorPermissions, $methodName)) {
                $GetActorPermissions->$methodName($paramValue);
            }
        }
        return $GetActorPermissions;
    }


   /**
    * @param array $paramAutoSet
    * @return GetActorPermissionsResponse
    */
    public function GetActorPermissionsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetActorPermissionsResponse = new GetActorPermissionsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetActorPermissionsResponse, $methodName)) {
                $GetActorPermissionsResponse->$methodName($paramValue);
            }
        }
        return $GetActorPermissionsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourcePermissions
    */
    public function GetResourcePermissions($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourcePermissions = new GetResourcePermissions();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourcePermissions, $methodName)) {
                $GetResourcePermissions->$methodName($paramValue);
            }
        }
        return $GetResourcePermissions;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourcePermissionsResponse
    */
    public function GetResourcePermissionsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourcePermissionsResponse = new GetResourcePermissionsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourcePermissionsResponse, $methodName)) {
                $GetResourcePermissionsResponse->$methodName($paramValue);
            }
        }
        return $GetResourcePermissionsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetActorPermissions
    */
    public function SetActorPermissions($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetActorPermissions = new SetActorPermissions();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetActorPermissions, $methodName)) {
                $SetActorPermissions->$methodName($paramValue);
            }
        }
        return $SetActorPermissions;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfString
    */
    public function ArrayOfString($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfString = new ArrayOfString();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfString, $methodName)) {
                $ArrayOfString->$methodName($paramValue);
            }
        }
        return $ArrayOfString;
    }


   /**
    * @param array $paramAutoSet
    * @return SetActorPermissionsResponse
    */
    public function SetActorPermissionsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetActorPermissionsResponse = new SetActorPermissionsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetActorPermissionsResponse, $methodName)) {
                $SetActorPermissionsResponse->$methodName($paramValue);
            }
        }
        return $SetActorPermissionsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetResourcePermissions
    */
    public function SetResourcePermissions($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetResourcePermissions = new SetResourcePermissions();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetResourcePermissions, $methodName)) {
                $SetResourcePermissions->$methodName($paramValue);
            }
        }
        return $SetResourcePermissions;
    }


   /**
    * @param array $paramAutoSet
    * @return SetResourcePermissionsResponse
    */
    public function SetResourcePermissionsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetResourcePermissionsResponse = new SetResourcePermissionsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetResourcePermissionsResponse, $methodName)) {
                $SetResourcePermissionsResponse->$methodName($paramValue);
            }
        }
        return $SetResourcePermissionsResponse;
    }



}

?>
