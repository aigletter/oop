<?php


namespace Patterns\Observer;


class OrderSpl implements \SplSubject
{
    /**
     * @var \SplObserver[]
     */
    protected $observers = [];

    protected $status;

    public function setStatus($status)
    {
        $this->status = $status;

        $this->notify();
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {
        foreach ($this->observers as $key => $item) {
            if ($item === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}