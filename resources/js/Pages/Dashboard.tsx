import React from 'react'
import { Link, usePage } from '@inertiajs/react'

export default function AuthenticatedLayout({
  children,
  header,
}: {
  children: React.ReactNode
  header?: React.ReactNode
}) {
  const { auth } = usePage().props as any

  return (
    <div className="flex min-h-screen bg-gray-100">
      {/* Sidebar */}
      <aside className="w-64 bg-white shadow-md">
        <div className="p-6 font-bold text-lg border-b">Mi App</div>
        <nav className="flex flex-col p-4 gap-2">
          <Link href="/dashboard" className="text-gray-700 hover:underline">
            Dashboard
          </Link>
          <Link href="/profile" className="text-gray-700 hover:underline">
            Perfil
          </Link>
          {/* Agrega más enlaces aquí */}
        </nav>
      </aside>

      {/* Main content */}
      <div className="flex-1 flex flex-col">
        {/* Header */}
        <header className="bg-white shadow p-4">
          {header ?? (
            <h1 className="text-xl font-bold text-gray-800">
              Bienvenido, {auth.user.name}
            </h1>
          )}
        </header>

        {/* Page content */}
        <main className="flex-1 p-6">{children}</main>
      </div>
    </div>
  )
}
