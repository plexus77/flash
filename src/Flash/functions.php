<?php

if ( ! function_exists('flash')) {

    /**
     * Arrange for a flash message.
     *
     * @param  string|null $message
     * @param  string|null $title
     * @param  string      $level
     * @return \PSDesign\Flash\FlashNotifier
     */
    function flash($message = null, $title = null, $level = 'info')
    {
        $notifier = app('flash');

        if ( ! is_null($message)) {
            return $notifier->message($message, $title, $level);
        }

        return $notifier;
    }

}
