import React from 'react';

const Scroll = (props) => {
    return(
        <div style={{overflowY: 'hidden'}}>
            {props.children}
        </div>
    )
};

export default Scroll;