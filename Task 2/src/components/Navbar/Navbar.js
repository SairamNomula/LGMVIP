import React from 'react';
import Button from '@material-ui/core/Button';
import './Navbar.css';

const Navbar = ({onButtonSubmit}) => {

            return(
                //used to provide the button funtionality and displays the logo
                <nav className='navbar'>
                    <h3 className="logo">Getti</h3>
                    <div className='nav-links'>
                        <Button variant="contained" onClick={onButtonSubmit}>
                            Get Users
                        </Button>
                    </div>
                </nav>
            );
        }
export default Navbar;