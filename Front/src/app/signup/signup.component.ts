import { Component, OnInit } from '@angular/core';
import { PiligrimUser } from '../models/user/piligrim-user';
import { NgForm } from '../../../node_modules/@angular/forms';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {
  piligrimUser: PiligrimUser;
  
  constructor() { }

  ngOnInit() {
    this.piligrimUser = new PiligrimUser('', '');
  }

  onSubmit(signUpForm: NgForm) {
    console.log(signUpForm);
  }

}
