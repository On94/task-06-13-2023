<?php

namespace App;

class DataController
{
    /**
     * @var DataModel $model
     */
    private DataModel $model;

    /**
     * @var EmailNotification $emailSender
     */
    private EmailNotification $emailSender;

    /**
     * @var SMSNotification $SMSSender
     */
    private SMSNotification $SMSSender;

    public function __construct()
    {
        $this->model = new DataModel();
        $this->emailSender = new EmailNotification();
        $this->SMSSender = new SMSNotification();
    }

    /**
     * @param $input mixed
     * @return void
     */
    public function saveData($input) : void
    {
        if (!is_string($input)) {
            die("You're trying something bad!");
        }

        $uniqueId = uniqid();

        $this->model->saveData($uniqueId, $input);

        $_SESSION['uniqueId'] = $uniqueId;

        $notificationMessage = "Entered text was: " . htmlspecialchars($input);

        $this->emailSender
            ->setRecipient("test@example.com")
            ->setSubject("New text entered")
            ->setMessage($notificationMessage)
            ->sendEmail();

        $this->SMSSender
            ->setRecipient("+1111111111")
            ->setMessage($notificationMessage)
            ->sendSMS();

        header('Location: text-view.php'); exit;
    }

    /**
     * @return array
     */
    public function getData() : array
    {
        $uniqueId = $_SESSION['uniqueId'] ?? '';

        $data = $this->model->getData($uniqueId);

        return is_array($data) ? $data : [];
    }
}
