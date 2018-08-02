import { Component, OnInit } from '@angular/core';
import { NgForm } from '@angular/forms';
import { PiligrimUser } from '../models/user/piligrim-user';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  piligrimUser: PiligrimUser;

  constructor() { }

  ngOnInit() {
    this.piligrimUser = new PiligrimUser('', '');
  }

  onSubmit(loginForm: NgForm) {
    console.log(loginForm.value);
  }

}
