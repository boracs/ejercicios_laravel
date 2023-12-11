import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

import DangerButton from '@/Components/DangerButton';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import Modal from '@/Components/Modal';
import SecondaryButton from '@/Components/SecondaryButton';
import TextInput from '@/Components/TextInput';
import { useRef, useState } from 'react';
import { useForm } from '@inertiajs/react';
import { Head } from '@inertiajs/react';
import PrimaryButton from '@/Components/PrimaryButton';
 

export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Cars</h2>}
        >
            <Head title="Cars" />
            <div className="bg-white grid v-screen place-items-center">
                <div className="mt3 mb-3 flex justify-end" >
                    <PrimaryButton> 
                        <i className="fa-solid fa-plus-circle">Añadir</i>
                    </PrimaryButton>
                </div>
            </div>
            <div className="bg-white grid v-screen place-items-center py-6">
                <table class="table-auto border border-gray-400">
                    <thead>
                        <tr className="bg-gray-100">
                            <th classNam="px-2 py-2">#</th>
                            <th classNam="px-2 py-2">MARCA</th>
                            <th classNam="px-2 py-2">MODELO</th>
                            <th classNam="px-2 py-2">COLOR</th>
                            <th classNam="px-2 py-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {props.cars.map((car,i)=>(
                            <tr key={car.id}>
                            <td className="border border-gray-400 px-2 py-2">{(i+1)}</td>
                            <td className="border border-gray-400 px-2 py-2">{car.make}</td>
                            <td className="border border-gray-400 px-2 py-2">{car.model}</td>
                            <td className="border border-gray-400 px-2 py-2">
                                <i className={"fa-solid fa-car text-"+car.color+"-600"}> </i>
                            </td>
                            <td className="border border-gray-400 px-2 py-2"></td>
                            <td className="border border-gray-400 px-2 py-2"></td>

                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </AuthenticatedLayout>
    );
}
