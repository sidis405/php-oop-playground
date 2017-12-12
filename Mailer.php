<?php


class Mailer
{
    protected function send($from, $to, $subject, $body)
    {
        // Mail Implementation
    }
}

class UserMailer extends Mailer
{
}

class AdminMailer extends Mailer
{
}
