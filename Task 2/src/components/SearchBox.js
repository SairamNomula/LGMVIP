import React from 'react';
import './Search.css';

const SearchBox=({searchfeild, searchChange})=>{
    return(
            <div className='pa3'>
                <input 
                className='pa2 ba'
                 type="search" id='search'
                 placeholder='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search User' 
                 onChange={searchChange}/>
            </div>
        );
}

export default SearchBox;