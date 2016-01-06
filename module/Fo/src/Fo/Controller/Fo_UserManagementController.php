<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Fo for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Fo\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class Fo_UserManagementController extends AbstractActionController
{
    public function indexAction()
    {
        return array();
    }

    public function addAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /fo_UserManagement/fo_-user-management/add
        return array();
    }
    public function editAction()
    {
    	// This shows the :controller and :action parameters in default route
    	// are working when you browse to /fo_UserManagement/fo_-user-management/edit
    	return array();
    }
    public function deleteAction()
    {
    	// This shows the :controller and :action parameters in default route
    	// are working when you browse to /fo_UserManagement/fo_-user-management/delete
    	return array();
    }
}
