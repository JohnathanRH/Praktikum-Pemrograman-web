<?php

use Models\Member;

require_once('../Models/Member.php');
require_once('Controller.php');

class MemberController extends Controller{
    public static function create(array $request){
        $member = new Member();
        $member->mountData($request);

        $member->create();
        self::redirectTo("Views/Member.php");
    }

    public static function update(array $request){
        $member = new Member();
        $member->mountData($request);
        $member->update();
        self::redirectTo("Views/Member.php");
    }

    public static function read(int $id) : array{
        $member = new Member();
        $member->read($id);
        return $member->packToArray(true);
    }

    public static function delete(int $id){
        $member = new Member();
        $member->id_member = $id;
        $member->delete();
        self::redirectTo("Views/Member.php");
    }
}
?>