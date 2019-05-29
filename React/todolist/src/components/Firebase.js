import firebase from 'firebase';
import 'firebase/database';

const firebaseConfig = {
    apiKey: "AIzaSyCv-mRuZByV00vh-lxoPqQmCR7p2k1AY1E",
    authDomain: "react-test-5e616.firebaseapp.com",
    databaseURL: "https://react-test-5e616.firebaseio.com",
    projectId: "react-test-5e616",
    storageBucket: "react-test-5e616.appspot.com",
    messagingSenderId: "966883919624",
    appId: "1:966883919624:web:c12bcf33183e1659"
  };
const fire = firebase.initializeApp(firebaseConfig)
export {fire}