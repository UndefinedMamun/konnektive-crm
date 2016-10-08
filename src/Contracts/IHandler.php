<?php
namespace Konnektive\Contracts;
/**
 * Author: Spencer Taufer <staufer@gmail.com>
 * Date: 10/6/2016
 * Time: 5:51 PM
 */

interface IHandler {
    /**
     * @param $request \Konnektive\Request\Request
     * @return \Konnektive\Response\Response
     */
    public function handle(\Konnektive\Request\Request $request);
}