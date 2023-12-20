<?php

class Subscription
{
    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {
        // create the subscription
    }

    public function cancel()
    {
        // find stripe customer
        $customer = $this->gateway->findCustomer();

        // find stripe subscription by customer
        $subscription = $this->gateway->findSubscriptionByCustomer();
    }

    public function invoice()
    {
        // invoice the subscription
    }

    public function swap($newPlan)
    {
        // swap the subscription to new plan
    }
}

interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {
        // find the stripe customer
    }

    public function findSubscriptionByCustomer()
    {
        // find the stripe subscription by customer
    }
}

class BraintreeGateway implements Gateway
{
    public function findCustomer()
    {
        // find the stripe customer
    }

    public function findSubscriptionByCustomer()
    {
        // find the stripe subscription by customer
    }
}

new Subscription(new BraintreeGateway());
