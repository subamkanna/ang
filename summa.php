 validator: new Match('password', 'confirmPassword')


import { FormGroup } from '@angular/forms';
export class Match {
constructor(pass1:string, pass2:string) { 
return (formGroup: FormGroup) => {

if (formGroup.controls[pass1].value !==formGroup.controls[pass2].value ){
   
     formGroup.controls[pass2].setErrors({ match: true });
  
}
else {
 
}
}
}
}
