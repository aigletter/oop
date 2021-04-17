<?php


namespace Patterns\Observer;


class Order implements SubjectInterface
{
    /**
     * @var ObserverInterface[]
     */
    protected $observers = [];

    protected $status;

    public function setStatus($status)
    {
        $this->status = $status;

        $this->notify();
    }

    public function attach(ObserverInterface $observer) {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer) {
        foreach ($this->observers as $key => $item) {
            if ($item === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}