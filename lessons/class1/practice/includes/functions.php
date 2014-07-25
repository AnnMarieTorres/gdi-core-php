<?php
function viewWoman($name, $url, $years_lived, $image_url, $biography)
{
    echo '<article class="woman">
            <h3><a href="' . $url . '">' . $name . '</a></h3>
            <h4>' . $years_lived . '</h4>
            <img src="' . $image_url . '" alt="' . $name . '" />
            <p>' . $biography . '</p>
          </article>';
}

function jsonWoman($woman)
{
    echo json_encode($woman);
}
