<?php

namespace other;

interface Observer
{
    function update($event = null);
}