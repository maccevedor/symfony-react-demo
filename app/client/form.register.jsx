import ReactOnRails from 'react-on-rails'
import RegistrationForm from './form.jsx';

const Registration = (props) => (
    <RegistrationForm {...props} />
);

ReactOnRails.register({ Registration });



