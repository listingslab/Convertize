///<reference path='Convertize/signupForm.ts'/>

module Convertize
{
    
    import SignupForm = Convertize.SignupForm;

    export class Main
    {

        public SignupForm: SignupForm;
        
        constructor()
        {
            // Init the app by creating our SignupForm
            this.SignupForm = new SignupForm ();
        }

    }
}