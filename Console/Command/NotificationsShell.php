<?php

App::uses('Notifier', 'NotificationManager.Lib');

/**
 * 
 */
class NotificationsShell extends AppShell
{
	public function main()
	{
        $NotificationModel = new Notification();
        
        $notifications = $NotificationModel->findBySentAndErrors(false, null);
        
        foreach ($notifications as $notification) {
            Notifier::notify($notification);
        }
	}

}

