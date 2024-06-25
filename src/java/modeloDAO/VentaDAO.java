package modeloDAO;

import config.Conexion;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import modeloDTO.Venta;

public class VentaDAO {

    Connection con;
    Conexion cn = new Conexion();
    PreparedStatement ps;
    ResultSet rs;
    int r;
    
    public String GenerarSerie() {
        String numeroserie = "";
        String sql = "select max(NumeroSerie) from ventas";
        try {
            con = cn.Conexion();
            ps = con.prepareStatement(sql);
            rs = ps.executeQuery();
            while (rs.next()) {
                numeroserie = rs.getString(1);
            }
            ps.close();
            con.close();
            rs.close();
        } catch (SQLException e) {
            System.out.println("Error al generar serie: " + e.getMessage());
        }
        return numeroserie;
    }

    public String IdVentas() {
        String idventas = "";
        String sql = "select max(IdVentas) from ventas";
        try {
            con = cn.Conexion();
            ps = con.prepareStatement(sql);
            rs = ps.executeQuery();
            while (rs.next()) {
                idventas = rs.getString(1);
            }
            ps.close();
            con.close();
            rs.close();
        } catch (SQLException e) {
            System.out.println("Error al obtener el ID de ventas: " + e.getMessage());
        }
        return idventas;
    }

    public int guardarVenta(Venta ve) {
        String sql = "insert into ventas(IdCliente, IdEmpleado, NumeroSerie, FechaVentas, Monto, Estado) values(?,?,?,?,?,?)";
        try {
            con = cn.Conexion();
            ps = con.prepareStatement(sql);
            ps.setInt(1, ve.getIdcliente());
            ps.setInt(2, ve.getIdempleado());
            ps.setString(3, ve.getNumserie());
            ps.setString(4, ve.getFecha());
            ps.setDouble(5, ve.getMonto());
            ps.setString(6, ve.getEstado());
            r = ps.executeUpdate(); // Guarda el resultado de la ejecución de la consulta
            ps.close();
            con.close();
        } catch (SQLException e) {
            System.out.println("Error al guardar la venta: " + e.getMessage());
        }
        return r;
    }

    public int guardarDetalleventas(Venta venta) {
        String sql = "insert into detalle_ventas(IdVentas, IdProducto, Cantidad, PrecioVenta) values(?,?,?,?)";
        try {
            con = cn.Conexion();
            ps = con.prepareStatement(sql);
            ps.setInt(1, venta.getId());
            ps.setInt(2, venta.getIdproducto());
            ps.setInt(3, venta.getCantidad());
            ps.setDouble(4, venta.getPrecio());
            r = ps.executeUpdate(); // Guarda el resultado de la ejecución de la consulta
            ps.close();
            con.close();
        } catch (SQLException e) {
            System.out.println("Error al guardar el detalle de la venta: " + e.getMessage());
        }
        return r;
    }    
}
