<?php
use App\User;
use App\FormTabel;

function totalUser()
{
	return User::count();
}

function totalFormTabel()
{
	return FormTabel::count();
}