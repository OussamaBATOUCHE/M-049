export class PiligrimUser {
    id: string;
    passportId: string;
    nationalId: string;
    userName: string;
    password: string;
    fullName: string;
    sex: string;
    email: string;
    country: string;
    language: string;
    mobileNumber: string;
    profilePicture: string;
    constructor(userName, password) {
        this.id = '';
        this.userName = userName;
        this.password = password;
        this.nationalId = '';
        this.sex = '';
        this.email = '';
        this.language = '';
        this.mobileNumber = '';
        this.profilePicture = '';
        this.passportId = '';
        this.fullName = '';
    }
}