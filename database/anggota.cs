using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Db_ci
{
    #region Anggota
    public class Anggota
    {
        #region Member Variables
        protected int _no;
        protected string _nomor_anggota;
        protected string _nama_anggota;
        protected string _alamat;
        protected string _telepon;
        protected string _email;
        protected unknown _tanggal_daftar;
        protected unknown _status;
        #endregion
        #region Constructors
        public Anggota() { }
        public Anggota(string nomor_anggota, string nama_anggota, string alamat, string telepon, string email, unknown tanggal_daftar, unknown status)
        {
            this._nomor_anggota=nomor_anggota;
            this._nama_anggota=nama_anggota;
            this._alamat=alamat;
            this._telepon=telepon;
            this._email=email;
            this._tanggal_daftar=tanggal_daftar;
            this._status=status;
        }
        #endregion
        #region Public Properties
        public virtual int No
        {
            get {return _no;}
            set {_no=value;}
        }
        public virtual string Nomor_anggota
        {
            get {return _nomor_anggota;}
            set {_nomor_anggota=value;}
        }
        public virtual string Nama_anggota
        {
            get {return _nama_anggota;}
            set {_nama_anggota=value;}
        }
        public virtual string Alamat
        {
            get {return _alamat;}
            set {_alamat=value;}
        }
        public virtual string Telepon
        {
            get {return _telepon;}
            set {_telepon=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual unknown Tanggal_daftar
        {
            get {return _tanggal_daftar;}
            set {_tanggal_daftar=value;}
        }
        public virtual unknown Status
        {
            get {return _status;}
            set {_status=value;}
        }
        #endregion
    }
    #endregion
}