<?php

function viewWoman($name, $url, $years_lived, $image_url, $biography)
{
    return '<article class="woman">
            <h3><a href="' . $url . '">' . $name . '</a></h3>
            <h4>' . $years_lived . '</h4>
            <img src="' . $image_url . '" alt="' . $name . '" />
            <p>' . $biography . '</p>
          </article>';
}