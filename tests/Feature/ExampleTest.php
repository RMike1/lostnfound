<?php

it('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
