import React, { useState } from 'react';
import TableContainer from '@material-ui/core/TableContainer';
import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';
import Paper from '@material-ui/core/Paper';
import TableBody from '@material-ui/core/TableBody';
import Typography from '@material-ui/core/Typography';
import Toolbar from '@material-ui/core/Toolbar';
import IconButton from '@material-ui/core/IconButton';
import EditIcon from '@material-ui/icons/Edit';
import DeleteIcon from '@material-ui/icons/Delete';
import Button from '@material-ui/core/Button';
import TextField from '@material-ui/core/TextField';
import CheckIcon from '@material-ui/icons/Check';
import ClearIcon from '@material-ui/icons/Clear';
import { makeStyles } from '@material-ui/core/styles';

const useStyles = makeStyles({
    root: {
        display: 'flex',
        'justify-content': 'space-between'
    },
    buttonAdd: {
        background: '#28a745',
        color: "#fff",
    },
    displayNone: {
        display: "none"
    }

});



function createData(idCategory, name, meta_title, meta_description, slug) {
    return { idCategory, name, meta_title, meta_description, slug }
}

const rows = [
    createData(1, 'Roupas', 'Roupas', 'Roupas Bonitas', 'roupas'),
    createData(2, 'Roupas', 'Roupas', 'Roupas Bonitas', 'roupas'),
];


// const FieldsCategory = () => {

//     return (

//     );
// }



export default function DefaultTable() {
    async function handleRenderFields(e) {
        e.preventDefault();
    }
    const [categories, setCategories] = useState([]);
    const [name, setName] = useState('');
    const [meta_title, setTitle] = useState('');
    const [meta_description, setDescription] = useState('');
    const [slug, setSlug] = useState('');

    async function handleCreate(e) {
        e.preventDefault();
        const data = {
            name,
            meta_title,
            meta_description,
            slug
        }
        const item = createData(3, name, meta_title, meta_description, slug)
        rows.push(item)
        console.log(rows);
        setCategories(rows);
    }



    async function handleCleanForm(e) {
        e.preventDefault();
    }

    const classes = useStyles();
    

    return (
        <Paper elevation={10} square={true}>

            <TableContainer>
                <Toolbar classes={{ root: classes.root }}>
                    <Typography variant="h5" >
                        Categorias
                    </Typography>
                    <Button
                        onClick={handleRenderFields}
                        variant="contained"
                        classes={{ root: classes.buttonAdd }}>Adicionar</Button>
                </Toolbar>
                <Table>
                    <TableHead>
                        <TableRow>
                            <TableCell>Nome</TableCell>
                            <TableCell>Título para SEO</TableCell>
                            <TableCell>Descrição para SEO</TableCell>
                            <TableCell>URL da Categoria</TableCell>
                            <TableCell>Ações</TableCell>
                        </TableRow>
                    </TableHead>
                    <TableBody>
                        {rows.map((row) => (
                            <TableRow key={row.idCategory}>
                                <TableCell>{row.name}</TableCell>
                                <TableCell>{row.meta_title}</TableCell>
                                <TableCell>{row.meta_description}</TableCell>
                                <TableCell>{row.slug}</TableCell>
                                <TableCell>
                                    <IconButton>
                                        <EditIcon fontSize="small" />
                                    </IconButton>
                                    <IconButton>
                                        <DeleteIcon fontSize="small" />
                                    </IconButton>
                                </TableCell>
                            </TableRow>
                        ))}
                        <TableRow>

                            <TableCell>
                                <TextField
                                    onChange={e => setName(e.target.value)}
                                    id="name"
                                    label="Nome"
                                    variant="outlined"
                                    size="small" />
                            </TableCell>
                            <TableCell>
                                <TextField
                                    onChange={e => setTitle(e.target.value)}
                                    id="meta_title"
                                    label="Título para SEO"
                                    variant="outlined"
                                    size="small" />
                            </TableCell>
                            <TableCell>
                                <TextField
                                    onChange={e => setDescription(e.target.value)}
                                    id="meta_description"
                                    label="Descrição para SEO"
                                    variant="outlined"
                                    size="small" />
                            </TableCell>
                            <TableCell>
                                <TextField
                                    onChange={e => setSlug(e.target.value)}
                                    id="slug"
                                    label="URL da Categoria"
                                    variant="outlined"

                                    size="small" />
                            </TableCell>
                            <TableCell>
                                <IconButton
                                    onClick={handleCreate}
                                >
                                    <CheckIcon
                                        fontSize="small" />
                                </IconButton>
                                <IconButton
                                    onClick={handleCleanForm}
                                >
                                    <ClearIcon
                                        fontSize="small" />
                                </IconButton>
                            </TableCell>
                        </TableRow>
                    </TableBody>
                </Table>
            </TableContainer>
        </Paper>
    );
}
// export default function Table() {
//     const [state, setState] = React.useState({
//         columns: [
//             { title: 'Nome', field: 'name' },
//             { title: 'Título para SEO', field: 'meta_title' },
//             { title: 'Descrição para SEO', field: 'meta_description' },
//             { title: 'URL da Categoria', field: 'slug' },

//         ],
//         data: [
//             {
//                 id: 1,
//                 name: 'Calças',
//                 meta_title: 'Calças',
//                 meta_description: 'Calças Lindas',
//                 slug: 'calcas',
//                 parent_id: null,
//             },
//             {
//                 id: 2,
//                 name: 'Blusas',
//                 meta_title: 'Blusas',
//                 meta_description: 'Blusas Lindas',
//                 slug: 'blusas',
//                 parent_id: 1,
//             },

//         ],
//     });

//     return (
//         <MaterialTable
//             title="Categorias"
//             columns={state.columns}
//             data={state.data}
//             editable={{
//                 onRowAdd: (newData) =>
//                     new Promise((resolve) => {
//                         setTimeout(() => {
//                             resolve();
//                             setState((prevState) => {
//                                 const data = [...prevState.data];
//                                 data.push(newData);
//                                 return { ...prevState, data };
//                             });
//                         }, 600);
//                     }),
//                 onRowUpdate: (newData, oldData) =>
//                     new Promise((resolve) => {
//                         setTimeout(() => {
//                             resolve();
//                             if (oldData) {
//                                 setState((prevState) => {
//                                     const data = [...prevState.data];
//                                     data[data.indexOf(oldData)] = newData;
//                                     return { ...prevState, data };
//                                 });
//                             }
//                         }, 600);
//                     }),
//                 onRowDelete: (oldData) =>
//                     new Promise((resolve) => {
//                         setTimeout(() => {
//                             resolve();
//                             setState((prevState) => {
//                                 const data = [...prevState.data];
//                                 data.splice(data.indexOf(oldData), 1);
//                                 return { ...prevState, data };
//                             });
//                         }, 600);
//                     }),
//             }}
//         />
//     );
// }