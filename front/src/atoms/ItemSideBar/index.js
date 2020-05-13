import React from 'react';
import ListItem from '@material-ui/core/ListItem';
import ListItemIcon from '@material-ui/core/ListItemIcon';
import ListItemText from '@material-ui/core/ListItemText';
import Icon from '@material-ui/core/Icon';



const ItemSidebar = props => {
    return (
        <ListItem button key={props.text}>
            <ListItemIcon><Icon>{props.icon}</Icon></ListItemIcon>
            <ListItemText primary={props.text} />
        </ListItem>
    );
}
export default ItemSidebar;