<?php

class Session {

    // Check if given session exists within scope
    public static function exists($key) {
        return (isset($_SESSION[$key])) ? true : false;
    }

    // Set Session with given key and value
    // Warning! It will override the value if given key already has Session
    public static function set($key, $value) {
        return $_SESSION[$key] = $value;
    }

    // Get Session in scope with key and also optionally
    // get the second session
    public static function get($key, $secondKey = false) {
        if ($secondKey) {
            if (isset($_SESSION[$key][$secondKey])) {
                return $_SESSION[$key][$secondKey];
            }
        } else {
            if (isset($_SESSION[$key])) {
                return $_SESSION[$key];
            }
        }
        return false;
    }

    // Deletes given Session in scope
    public static function delete($key) {
        if (self::exists($key)) {
            unset($_SESSION[$key]);
        }
    }

    // Removes all Session in scope
    public static function destroy() {
        return session_destroy();
    }

    // Only used for flashing
    public static function flash($key, $string = '') {
        if (self::exists($key)) {
            $session = self::get($key);
            self::delete($key);
            return $session;
        } else {
            self::put($key, $string);
        }
    }

    // Display all Sessions in scope
    public static function display() {
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
    }

}
