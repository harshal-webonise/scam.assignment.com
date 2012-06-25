<?php
class HelloShell extends AppShell{
    public function main ()
    {
        $this->out('Hello harshal');
    }
    public function hey_there() {
        $this->out('Hey there ' . $this->args[0]);
    }
}